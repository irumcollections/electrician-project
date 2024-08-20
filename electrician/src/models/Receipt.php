<?php

class Receipt {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function createReceipt($job_id, $total_amount) {
        $sql = "INSERT INTO receipts (job_id, total_amount) VALUES (:job_id, :total_amount)";
        $this->db->query($sql, [
            'job_id' => $job_id,
            'total_amount' => $total_amount,
        ]);
    }

    public function getReceiptByJobId($job_id) {
        $sql = "SELECT * FROM receipts WHERE job_id = :job_id";
        return $this->db->query($sql, ['job_id' => $job_id])->fetch(PDO::FETCH_ASSOC);
    }
}
