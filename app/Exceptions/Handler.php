<?php

namespace App\Exceptions;

use Illuminate\Http\Response;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $e
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        $httpStatus = Response::HTTP_INTERNAL_SERVER_ERROR;
        $response = [
            'error_code' => 500000,
            'message' => '錯誤異常',
        ];
        if (config('app.debug', false)) {
            $response['detail'] = [
                'system' => $exception->getMessage(),
            ];
        }
        if ($exception instanceof ModelNotFoundException) {
            $httpStatus = Response::HTTP_NOT_FOUND;
            $response['error_code'] = 500001;
            $response['message'] = 'Resource not found.';
        } elseif ($exception instanceof NotFoundHttpException) {
            $httpStatus = Response::HTTP_NOT_FOUND;
            $response['error_code'] = 500002;
            $response['message'] = 'Endpoint not found.';
        } else {
            $httpStatus = Response::HTTP_INTERNAL_SERVER_ERROR;
            $response['message'] = 'System error.';
        }

        return response()->json($response, $httpStatus);
    }
}
