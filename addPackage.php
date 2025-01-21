<?php
  require_once "conf/dbconf.php";
  require_once "fun/myfunc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
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

        .wrapper .input-box {
            position: relative;
            width: 100%;
            margin: 20px 0;
        }

        .input-box input,
        .input-box textarea,
        .input-box select {
            width: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(255, 255, 255, .2);
            border-radius: 40px;
            font-size: 16px;
            color: #fff;
            padding: 15px 20px;
        }

        .input-box textarea {
            height: 100px;
            resize: none;
        }

        .input-box select {
            height: 50px;
            background: #006676;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .input-box input::placeholder,
        .input-box textarea::placeholder,
        .input-box select option {
            color: #fff;
        }

        .input-box i {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
        }

        .btn {
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
        }
</style>
</head>
<body>
    <div class="wrapper">
    <form action="submit_package.php" method="post">

            <h1>ADD PACKAGE</h1>

        
            

            <div class="input-box">
                <input type="text" name="name" placeholder="Name" >
                <i class='bx bxs-user'></i>
            </div>


            <div class="input-box">
                <input type="text" name="image_path" placeholder="Image Path" >
                <i class='bx bxs-image'></i>
            </div>

       

            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</body>
</html>
