<?php

namespace App\Docs\System;

/**
 *  @OA\Get(
 *      tags={"System"},
 *      path="/api",
 *      summary="API 狀態檢查",
 *      @OA\Response(
 *         response=200,
 *         description="API 狀態正常",
 *         @OA\JsonContent(
 *              type="object",
 *              @OA\Property(
 *                  property="message",
 *                  type="string",
 *                  description="回應訊息",
 *              ),
 *              @OA\Property(
 *                  property="data",
 *                  type="array",
 *                  description="回應資料",
 *                  @OA\Items(
 *                    @OA\Property(
 *                         property="now_time",
 *                         type="time",
 *                         description="現在時刻",
 *                      ),
 *                  ),
 *              ),
 *              example = {
 *                  "message" : "OK",
 *                  "data" : {
 *                      "now_time": "2023-12-13 11:12:15"
 *                  },
 *              },
 *         ),
 *     ),
 *  )
 */
class CheckHealth
{
}
