<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use PHPOpenSourceSaver\JWTAuth\Exceptions\JWTException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenExpiredException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenInvalidException;

class JwtVerifiedMiddleware
{
    // Laravel 的 Debug 模式
    private $appDebug;
    public function __construct()
    {
        $this->appDebug = config('app.debug', false);
    }
    public function handle($request, Closure $next)
    {
        $response = [
            'error_code' => 300001,
            'message' => '登入階段已過期請重新登入',
        ];
        try {
            JWTAuth::parseToken()->authenticate();

            return $next($request);
        } catch (TokenExpiredException $e) {
            $response['error_code'] = 300001;

            $response = $this->handleException($response, $e);
        } catch (TokenInvalidException $e) {
            $response['error_code'] = 300002;

            $response = $this->handleException($response, $e);
        } catch (JWTException $e) {
            $response['error_code'] = 300003;

            $response = $this->handleException($response, $e);
        }
        return response()->json($response, Response::HTTP_UNAUTHORIZED);
    }

    private function handleException(array $response, $exception)
    {
        if ($this->appDebug) {
            $response['detail'] = [
                'jwt' => $exception->getMessage(),
            ];
        }
        return $response;
    }
}
