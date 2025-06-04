<?php
$conn = new mysqli("localhost", "root", "", "employee_db");

if (!isset($_GET['id'])) {
    echo "Invalid employee ID.";
    exit;
}

$id = intval($_GET['id']); // sanitize input

$result = $conn->query("SELECT * FROM employee WHERE id=$id");

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Employee not found.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Edit Employee</h2>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">

            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" value="<?= htmlspecialchars($row['name']) ?>" required>
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" value="<?= htmlspecialchars($row['email']) ?>" required>
            </div>

            <div class="form-group">
                <label>Position:</label>
                <input type="text" name="position" value="<?= htmlspecialchars($row['position']) ?>" required>
            </div>

            <div class="form-group">
                <label>Salary:</label>
                <input type="number" name="salary" value="<?= htmlspecialchars($row['salary']) ?>" required>
            </div>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
