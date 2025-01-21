<?php
try {
    require_once "conf/dbconf.php";
    require_once "fun/myfunc.php";

    $review = GetReviewsCover($connect);
?>

<!-- Packages section starts -->
<section class="review" id="review">
    <h1 class="heading">customer's <span>review</span></h1>
    <div class="box-container">

<?php
    foreach ($review as $key => $value) {
        $email = $value['email'];
        $name = $value['name'];
        $country = $value['country'];
        $picture = $value['picture'];
        $reviewText = $value['review'];
        $star = $value['star'];
?>

<div class="box">
    <div class="stars">
        <?php for ($i = 0; $i < $star; $i++) {
            echo "<i class='fas fa-star'></i>"; 
        } ?>
    </div>

    <p><?php echo $reviewText; ?></p>

    <div class="user">
        <img src="<?php echo $picture; ?>" alt="user"> 
        <div class="user-info">
            <h3><?php echo $name; ?></h3> 
            <span><?php echo $country; ?></span> 
        </div>
    </div>
</div>

<?php
    } 
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
