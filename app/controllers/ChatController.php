<?php
use App\Core\Model\ChatbotModel;
class ChatController {

    private $chatBotModel;

    public function __construct(ChatbotModel $chatBotModel) {
        $this->chatBotModel = $chatBotModel;
    }

    public function index() {
        // Get the user input.
        $userInput = $_POST['message'];

        // Get the chatbot response.
        $chatBotResponse = $this->chatBotModel->getResponse($userInput);

        // Display the chatbot response.
        echo $chatBotResponse;
    }

}
