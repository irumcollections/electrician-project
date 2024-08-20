<?php include __DIR__ . '/../templates/header.php'; ?>
<h2>Post a New Job</h2>
<form method="POST" action="">
    <div class="form-group">
        <label for="title">Job Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="form-group">
        <label for="description">Job Description</label>
        <textarea class="form-control" id="description" name="description" required></textarea>
    </div>
    <div class="form-group">
        <label for="price">Approximate Price</label>
        <input type="number" class="form-control" id="price" name="price" required>
    </div>
    <button type="submit" class="btn btn-primary">Post Job</button>
</form>
<?php include __DIR__ . '/../templates/footer.php'; ?>
