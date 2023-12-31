<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Response;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    /**
     * API 狀態檢查
     * @return \Illuminate\Http\JsonResponse|mixed
     * message 回傳訊息
     * data['now_time'] 現在時刻
     */
    public function checkHealth()
    {
        $httpStatus = Response::HTTP_OK;
        $reposeData = [
            'message' => 'OK',
            'data' => [
                'now_time' => date('Y-m-d H:i:s'),
            ]
        ];
        return response()->json(
            $reposeData,
            $httpStatus
        );
    }
}
