<?php

class WebScraper {

    private $ch;

    public function __construct() {
        $this->ch = curl_init();
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
    }

    public function scrape($url) {
        curl_setopt($this->ch, CURLOPT_URL, $url);
        $response = curl_exec($this->ch);

        if ($response === false) {
            throw new Exception('Failed to scrape the website');
        }

        return $response;
    }

    public function close() {
        curl_close($this->ch);
    }

}
