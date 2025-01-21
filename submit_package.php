<?php
require_once "conf/dbconf.php"; 
// Ensure this includes the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Make sure that the form data is present
    if (!empty($_POST['name']) && !empty($_POST['image_path'])) {
        
        $name = $_POST['name'];
        $image_path = $_POST['image_path'];

        // Prepare and bind SQL query
        $stmt = $connect->prepare("INSERT INTO packages (name, picture) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $image_path); // bind the two string values

        // Execute the query and check for success
        if ($stmt->execute()) {
            echo "Package added successfully!";
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
