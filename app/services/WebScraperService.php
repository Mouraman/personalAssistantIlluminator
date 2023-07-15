<?php

namespace App\Core\Service;

use App\Core\Model\WebScraperModel;

class WebScraperService
{

    private $webScraperModel;

    public function __construct(WebScraperModel $webScraperModel)
    {
        $this->webScraperModel = $webScraperModel;
    }

    public function getWebScraperById($id)
    {
        return $this->webScraperModel->getWebScraperById($id);
    }

    public function getWebScrapers()
    {
        return $this->webScraperModel->getWebScrapers();
    }

    public function createWebScraper(array $data)
    {
        return $this->webScraperModel->createWebScraper($data);
    }

    public function updateWebScraper(int $id, array $data)
    {
        return $this->webScraperModel->updateWebScraper($id, $data);
    }

    public function deleteWebScraper(int $id)
    {
        return $this->webScraperModel->deleteWebScraper($id);
    }

}