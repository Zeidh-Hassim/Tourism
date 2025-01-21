<!-- header section starts -->
<header>
    <input type="checkbox" name="name" id="toggler">
    <label for="toggler" class="fas fa-bars"></label> 

    <a href="#" class="logo">Bon<span>Voyage</span></a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#products">packages</a>
        <a href="#about">about</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
    </nav>
    
    <div class="icons">
        <!-- <a href="#" class="fas fa-heart"></a> -->
        <!-- <a href="#" class="fas fa-shopping-cart"></a> -->
        <a href="?action=login" class="fas fa-user" title="Login"></a>
        <!-- <a href="?action=signup" class="fas fa-user-plus" title="Signup"></a> -->

        <?php
        // Check which action the user has requested
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
            
            if ($action === 'login') {
                // Redirect to the login.php page
                header("Location: login.php");
                exit;
            } elseif ($action === 'signup') {
                // Redirect to the signup.php page
                header("Location: signup.php");
                exit;
            }
        }
        ?>
    </div>
</header>
<!-- header section ends -->
