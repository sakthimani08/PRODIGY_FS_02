<?php
include 'config.php';

$result = $conn->query("SELECT * FROM employee");
$total_employees = $result->num_rows;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .dashboard-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            max-width: 90%;
            width: 1000px;
            margin: 40px auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .top-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 25px;
        }

        .top-actions .btn {
            margin: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .btn-edit {
            background: #17a2b8;
        }

        .btn-edit:hover {
            background: #138496;
        }

        .btn-delete {
            background: #dc3545;
        }

        .btn-delete:hover {
            background: #c82333;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h2>Welcome to the Employee Dashboard</h2>

        <div class="top-actions">
            <a class="btn" href="add.php">➕ Add Employee</a>
            <span><strong>👥 Total Employees: <?= $total_employees ?></strong></span>
            <a class="btn" href="logout.php">🔒 Logout</a>
        </div>

        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Position</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
            <?php
            $index = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$index}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['position']}</td>
                    <td>₹" . number_format($row['salary']) . "</td>
                    <td>
                        <a class='btn btn-edit' href='edit.php?id={$row['id']}'>✏️ Edit</a>
                        <a class='btn btn-delete' href='delete.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\")'>❌</a>
                    </td>
                </tr>";
                $index++;
            }
            ?>
        </table>
    </div>
</body>
</html>
