<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function sendResponse($message, $result = null)
    {
        $response = [
            'success' => true,
            'message' => $message,
        ];

        if ($result) {
            $response['data'] = $result;
        }

        return response()->json($response, 200);
    }
}
