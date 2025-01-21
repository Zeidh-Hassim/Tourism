<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/signup.css">
    <title>Signup</title>
</head>
<body>

<?php
// Include the database configuration file
require_once 'conf/dbconf.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture the form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country = $_POST['country'];
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    // Validate required fields
    if ($firstname && $lastname && $email && $password) {
        // Hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Prepare the SQL query to insert data into the client table
        $stmt = $connect->prepare("INSERT INTO client (firstname, lastname, country, email, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $firstname, $lastname, $country, $email, $hashedPassword);

        // Execute the query
        if ($stmt->execute()) {
            echo "Registration successful!";
            // Redirect to login page or another page
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $connect->close();
    } else {
        echo "Please fill in all required fields.";
    }
}
?>

    <div class="wrapper">
<form action="signup.php" method="POST">
    <h1>SIGNUP</h1>
    <div class="name-box">
        <div class="input-box">
            <input type="text" name="firstname" placeholder="Firstname" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="text" name="lastname" placeholder="Lastname" required>
            <i class='bx bxs-user'></i>
        </div>
    </div>
    <div class="input-box">
        <input type="text" name="country" placeholder="Country">
        <i class='bx bxs-map'></i>
    </div>
    <div class="input-box">
        <input type="text" name="email" placeholder="Email" required>
        <i class='bx bxs-envelope'></i>
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
    <button type="submit" class="btn">Register</button>
    <div class="register-link">
        <p>Have an account? <a href="?action=login">Login</a></p>
        <?php
                // Check which action the user has requested
                if (isset($_GET['action'])) {
                    $action = $_GET['action'];
                    if ($action === 'login') {
                        // Redirect to the login.php page
                        header("Location: login.php");
                        exit;
                    }
                }
                ?>
    </div>
</form>
</div>
</body>
</html>