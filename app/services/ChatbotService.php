<?php

namespace App\Core\Service;

use App\Core\Model\ChatbotModel;

class ChatbotService
{

    private $chatbotModel;

    public function __construct(ChatbotModel $chatbotModel)
    {
        $this->chatbotModel = $chatbotModel;
    }

    public function getChatbotById($id)
    {
        return $this->chatbotModel->getChatbotById($id);
    }

    public function getChatbots()
    {
        return $this->chatbotModel->getChatbots();
    }

    public function createChatbot(array $data)
    {
        return $this->chatbotModel->createChatbot($data);
    }

    public function updateChatbot(int $id, array $data)
    {
        return $this->chatbotModel->updateChatbot($id, $data);
    }

    public function deleteChatbot(int $id)
    {
        return $this->chatbotModel->deleteChatbot($id);
    }

}