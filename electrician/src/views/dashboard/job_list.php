<?php include __DIR__ . '/../templates/header.php'; ?>
<h2>Job List</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Technician</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($jobs as $job): ?>
        <tr>
            <td><?php echo $job['title']; ?></td>
            <td><?php echo $job['description']; ?></td>
            <td><?php echo $job['price']; ?></td>
            <td><?php echo $job['technician_id'] ? 'Assigned' : 'Pending'; ?></td>
            <td><?php echo $job['status']; ?></td>
            <td>
                <a href="<?php echo $config['base_url']; ?>/assign_technician?job_id=<?php echo $job['id']; ?>" class="btn btn-sm btn-warning">Assign Technician</a>
                <a href="<?php echo $config['base_url']; ?>/job_details?job_id=<?php echo $job['id']; ?>" class="btn btn-sm btn-info">Details</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php include __DIR__ . '/../templates/footer.php'; ?>
