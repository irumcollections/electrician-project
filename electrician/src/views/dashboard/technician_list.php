<?php include __DIR__ . '/../templates/header.php'; ?>
<h2>Technician List</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Contact</th>
            <th>Expertise</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($technicians as $technician): ?>
        <tr>
            <td><?php echo $technician['name']; ?></td>
            <td><?php echo $technician['contact']; ?></td>
            <td><?php echo $technician['expertise']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php include __DIR__ . '/../templates/footer.php'; ?>
