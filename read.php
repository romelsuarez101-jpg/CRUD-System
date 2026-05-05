<?php include 'db.php'; ?>

<h2>Student List</h2>
<a href="create.php">Add New Student</a><br><br>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Student ID</th>
    <th>Name</th>
    <th>Course</th>
    <th>Actions</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM students");

while ($row = $result->fetch_assoc()):
?>

<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['student_id']; ?></td>
    <td><?= $row['name']; ?></td>
    <td><?= $row['course']; ?></td>
    <td>
        <a href="update.php?id=<?= $row['id']; ?>">Edit</a>
        <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Delete this student?');">Delete</a>
    </td>
</tr>

<?php endwhile; ?>
</table>