<?php

namespace App\Services;

use Google\Cloud\Dialogflow\V2\SessionsClient;
use Google\Cloud\Dialogflow\V2\QueryInput;
use Google\Cloud\Dialogflow\V2\TextInput;

class DialogflowService
{
    private $projectId;
    private $sessionClient;

    public function __construct()
    {
        $this->projectId = env('chatbot-tibh'); // Project ID của Dialogflow
        $this->sessionClient = new SessionsClient();     // Tạo session client
    }

    public function detectIntent($text, $sessionId)
    {
        $session = $this->sessionClient->sessionName($this->projectId, $sessionId ?: uniqid());

        $textInput = new TextInput();
        $textInput->setText($text);
        $textInput->setLanguageCode('en'); // Bạn có thể thay bằng ngôn ngữ khác

        $queryInput = new QueryInput();
        $queryInput->setText($textInput);

        $response = $this->sessionClient->detectIntent($session, $queryInput);

        return $response->getQueryResult();
    }
}