<?php


namespace App\Http\Controllers;


use Illuminate\Http\JsonResponse;

class ApiController
{
    /**
     * @param $data
     * @param $message
     * @param $code
     * @return JsonResponse
     */
    public function sendSuccess($data, $message,$code)
    {
        return response()->json(['data' => $data , 'message' => $message],$code);
    }

    /**
     * @param $message
     * @param $code
     * @return JsonResponse
     */
    public function sendError($message,$code)
    {
        return response()->json(['data' => null , 'message' => $message],$code);
    }
}
