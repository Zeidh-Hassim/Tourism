<?php
require_once "conf/dbconf.php"; 
// Ensure this includes the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Make sure that the form data is present
    if (!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['country']) && !empty($_POST['image_path']) && !empty($_POST['review']) && !empty($_POST['rating'])) {
        
        $email = $_POST['email'];
        $name = $_POST['name'];
        $country = $_POST['country'];
        $image_path = $_POST['image_path'];
        $review = $_POST['review'];
        $rating = $_POST['rating'];

        // Prepare and bind SQL query
        $stmt = $connect->prepare("INSERT INTO review (email, name, country, picture, review, star) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $email, $name, $country, $image_path, $review, $rating);

        // Execute the query and check for success
        if ($stmt->execute()) {
            echo "Review submitted successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $connect->close();
    } else {
        echo "All fields are required!";
    }
}
?>
