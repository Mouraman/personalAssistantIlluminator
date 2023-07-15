<?php

class WebScraperController {

    private $webScraperModel;

    public function __construct(WebScraperModel $webScraperModel) {
        $this->webScraperModel = $webScraperModel;
    }

    public function index() {
        // Get the user input.
        $url = $_POST['url'];

        // Scrape the data from the site.
        $data = $this->webScraperModel->scrape($url);

        // Return the data to the user.
        header('Content-type: application/json');
        echo json_encode($data);
    }

}
