<?php
$conn = new mysqli("localhost", "root", "", "employee_db");

// Check if all required POST variables exist
if (isset($_POST['id'], $_POST['name'], $_POST['email'], $_POST['position'], $_POST['salary'])) {
    $id = intval($_POST['id']);
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $position = $conn->real_escape_string($_POST['position']);
    $salary = floatval($_POST['salary']);

    $sql = "UPDATE employee SET name='$name', email='$email', position='$position', salary=$salary WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php?msg=updated");
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    echo "Missing form data!";
}
?>
