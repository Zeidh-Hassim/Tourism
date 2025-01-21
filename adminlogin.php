<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/login.css">
    <title>Admin Login</title>
</head>
<body>

<?php
require_once 'conf/dbconf.php'; // Include database configuration
session_start(); // Start session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email and password are provided
    if ($email && $password) {
        // Prepare the SQL query to fetch user details using email
        $stmt = $connect->prepare("SELECT email, password FROM admins WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $dbPassword = $row["password"]; // Fetch the password from the database

            // Directly compare the input password with the database password
            if ($password === $dbPassword) {
                $_SESSION["email"] = $row["email"];
                // Redirect to a protected page or user dashboard
                header("Location: admin.php");
                exit();
            } else {
                $error = "Invalid email or password.";
                // Redirect to the login page if login failed
                header("Location: adminlogin.php?error=" . urlencode($error));
                exit();
            }
        } else {
            $error = "Invalid email or password.";
            // Redirect to the login page if no matching user was found
            header("Location: adminlogin.php?error=" . urlencode($error));
            exit();
        }

        $stmt->close();
    } else {
        $error = "Please enter your email and password.";
        // Redirect to the login page if email or password is missing
        header("Location: adminlogin.php?error=" . urlencode($error));
        exit();
    }

    $connect->close(); // Close the database connection
}
?>

    <div class="wrapper">
    <form action="#" method="POST">
    <h1>ADMIN LOGIN</h1>
    <div class="input-box">
        <input type="text" name="email" placeholder="Email" required>
        <i class='bx bxs-user'></i>
    </div>
    <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt'></i>
    </div>
    
    <button type="submit" class="btn">Login</button>
    
</form>

    </div>
</body>
</html>
