<?php
namespace App\Core\Model;
use Database;


class WebScraperModel {

    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function getSites() {
        // Get the sites from the database.
        $sql = "SELECT * FROM sites";
        $results = $this->database->query($sql);

        // Return the sites.
        return $results->fetchAll();
    }

    public function createSite($url) {
        // Insert the site into the database.
        $sql = "INSERT INTO sites (url) VALUES (?)";
        $this->database->query($sql, [$url]);
    }

}

