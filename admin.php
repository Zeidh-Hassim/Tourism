<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/login.css">
    <title>Admin Panel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #40a8b8;
        }

        .wrapper {
            width: 420px;
            background: #006676;
            color: #fff;
            border-radius: 30px;
            padding: 30px 40px;
        }

        .wrapper h1 {
            font-size: 36px;
            text-align: center;
        }

        .wrapper .btn {
            width: 100%;
            height: 45px;
            background: #fff;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            cursor: pointer;
            font-size: 16px;
            color: #333;
            font-weight: 600;
            margin: 15px 0;
        }

        .wrapper .signout-link {
            font-size: 14.5px;
            text-align: center;
            margin: 20px 0 15px;
        }

        .signout-link p a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
        }

        .signout-link p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <form action=# method="POST">
            <h1>ADMIN PANEL</h1>
            <button  name="action" value="addPackage" class="btn">Add Package</button>
            <button  name="action" value="addReview" class="btn">Add Review</button>
            <div class="signout-link">
                <p><a href="adminlogin.php">Signout</a></p>
            </div>
        </form>
    </div>
</body>
</html>

<?php
// Check which action the user selected
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        // Redirect based on the action
        if ($action === 'addPackage') {
            header('Location: addPackage.php'); // This will take to the addPackage page
            exit();
        } elseif ($action === 'addReview') {
            header('Location: addreview.php'); // This will take to the addReview page
            exit();
        }
    }
}
?>
