<?php include __DIR__ . '/../templates/header.php'; ?>
<h1>Welcome, <?php echo $user['name']; ?>!</h1>
<p>Here you can manage your jobs, technicians, and view offers.</p>
<a href="<?php echo $config['base_url']; ?>/job_post" class="btn btn-primary">Post a New Job</a>
<?php include __DIR__ . '/../templates/footer.php'; ?>
