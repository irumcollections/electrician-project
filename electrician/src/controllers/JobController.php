<?php

class JobController {
    private $jobModel;

    public function __construct() {
        $this->jobModel = new Job();
    }

    public function index() {
        $jobs = $this->jobModel->getAllJobs();
        include __DIR__ . '/../views/dashboard/job_list.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = Validation::sanitize($_POST['title']);
            $description = Validation::sanitize($_POST['description']);
            $price = Validation::sanitize($_POST['price']);

            $this->jobModel->createJob($title, $description, $price);
            header('Location: ' . BASE_URL . '/dashboard');
        } else {
            include __DIR__ . '/../views/jobs/job_post.php';
        }
    }

    public function assignTechnician() {
        // Logic to assign technician
    }

    public function complete() {
        // Logic to complete job and send receipt
    }
}
