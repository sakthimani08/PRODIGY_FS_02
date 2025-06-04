<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO employee (name, email, position, salary)
            VALUES ('$name', '$email', '$position', '$salary')";

    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Add New Employee</h2>
        <form method="POST" action="">
            <label>Name:</label>
            <input type="text" name="name" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Position:</label>
            <input type="text" name="position" required>

            <label>Salary:</label>
            <input type="number" name="salary" required>

            <button type="submit">Add Employee</button>
        </form>
        <a class="btn" href="dashboard.php">Back to Dashboard</a>
    </div>
</body>
</html>
