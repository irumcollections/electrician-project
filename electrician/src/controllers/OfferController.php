<?php

class OfferController {
    private $offerModel;

    public function __construct() {
        $this->offerModel = new Offer();
    }

    public function index() {
        $offers = $this->offerModel->getAllOffers();
        include __DIR__ . '/../views/offers/offers_list.php';
    }
}
