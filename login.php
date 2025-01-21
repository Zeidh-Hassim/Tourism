<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
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
        $stmt = $connect->prepare("SELECT email, password FROM client WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row["password"]; // Fetch the hashed password

            // Verify the password
            if (password_verify($password, $hashedPassword)) {
                $_SESSION["email"] = $row["email"];
                // Redirect to a protected page or user dashboard
                header("Location: index.php");
                exit();
            } else {
                $error = "Invalid email or password.";
            }
        } else {
            $error = "Invalid email or password.";
        }

        $stmt->close();
    } else {
        $error = "Please enter your email and password.";
    }

    $connect->close(); // Close the database connection
}
?>


    <div class="wrapper">
    <form action="login.php" method="POST">
    <h1>LOGIN</h1>
    <div class="input-box">
        <input type="text" name="email" placeholder="email" required>
        <i class='bx bxs-user'></i>
    </div>
    <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt'></i>
    </div>
    <div class="remember-forgot">
        <label>
            <input type="checkbox"> Remember me
        </label>
        <a href="#">Forgot Password?</a>
    </div>
    <button type="submit" class="btn">Login</button>
    <div class="register-link">
        <p>Don't have an account? <a href="signup.php">Register</a></p>
    </div>
</form>

    </div>
</body>
</html>












