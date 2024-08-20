<?php

class Offer {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllOffers() {
        $sql = "SELECT * FROM offers";
        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createOffer($title, $description, $discount) {
        $sql = "INSERT INTO offers (title, description, discount) VALUES (:title, :description, :discount)";
        $this->db->query($sql, [
            'title' => $title,
            'description' => $description,
            'discount' => $discount,
        ]);
    }
}
