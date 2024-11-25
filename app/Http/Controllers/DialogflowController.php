<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DialogflowService;

class DialogflowController extends Controller
{
    protected $dialogflowService;

    // Tiêm phụ thuộc DialogflowService vào Controller
    public function __construct(DialogflowService $dialogflowService)
    {
        $this->dialogflowService = $dialogflowService;
    }

    // Hàm để xử lý tin nhắn từ người dùng
    public function handleMessage(Request $request)
    {
        // Lấy message và session_id từ request gửi lên
        $message = $request->input('message');
        $sessionId = $request->input('session_id');

        // Gọi service để gửi tin nhắn tới Dialogflow
        $dialogflowResponse = $this->dialogflowService->detectIntent($message, $sessionId);

        // Trả về phản hồi từ Dialogflow (intent và response text)
        return response()->json([
            'intent' => $dialogflowResponse->getIntent()->getDisplayName(),
            'response' => $dialogflowResponse->getFulfillmentText()
        ]);
    }
}