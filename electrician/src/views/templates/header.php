<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['app_name']; ?></title>
    <link rel="stylesheet" href="<?php echo $config['base_url']; ?>/public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $config['base_url']; ?>/public/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo $config['base_url']; ?>"><?php echo $config['app_name']; ?></a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <?php if (Auth::check()): ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo $config['base_url']; ?>/dashboard">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $config['base_url']; ?>/logout">Logout</a></li>
            <?php else: ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo $config['base_url']; ?>/login">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $config['base_url']; ?>/register">Register</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
<div class="container">
