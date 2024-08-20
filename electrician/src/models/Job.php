<?php

class Job {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllJobs() {
        $sql = "SELECT * FROM jobs";
        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createJob($title, $description, $price) {
        $sql = "INSERT INTO jobs (title, description, price) VALUES (:title, :description, :price)";
        $this->db->query($sql, [
            'title' => $title,
            'description' => $description,
            'price' => $price,
        ]);
    }
}
