<?php

class TechnicianController {
    private $technicianModel;

    public function __construct() {
        $this->technicianModel = new Technician();
    }

    public function assign() {
        // Logic to assign technician
    }

    public function list() {
        $technicians = $this->technicianModel->getAllTechnicians();
        include __DIR__ . '/../views/dashboard/technician_list.php';
    }
}
