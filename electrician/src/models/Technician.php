<?php

class Technician {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllTechnicians() {
        $sql = "SELECT * FROM technicians";
        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function assignTechnician($job_id, $technician_id) {
        $sql = "UPDATE jobs SET technician_id = :technician_id WHERE id = :job_id";
        $this->db->query($sql, [
            'technician_id' => $technician_id,
            'job_id' => $job_id,
        ]);
    }
}
