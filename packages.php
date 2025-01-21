<?php
try {
  require_once "conf/dbconf.php";
  require_once "fun/myfunc.php";

  $packages = GetPackageCover($connect);
?>

<!-- Packages section starts -->
<section class="products" id="products">
    <h1 class="heading">latest <span>Packages</span></h1>
    <div class="box-container">

<?php
  foreach ($packages as $key => $value) {
    $id = $value['package_id'];
    $name = $value['name'];
    $cover = $value['picture'];
?>

        <div class="box">
            <div class="image">
                <img src="<?php echo $cover; ?>" alt="<?php echo $name; ?>">
                <div class="icons">
                    <a href="#" class="cart-btn">View More</a>
                </div>
            </div>
            <div class="content">
                <h3><?php echo $name; ?></h3>
            </div>
        </div>

<?php
  } // End of loop
?>

    </div>
</section>
<!-- Packages section ends -->

<?php
} // End of try block
catch (Exception $e) {
    echo "<h1>500 Internal error</h1>";
}
?>
