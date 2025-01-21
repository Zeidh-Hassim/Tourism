<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    // Email to send the message to
    $to = "zeidhhassim@gmail.com";
    
    // Email subject
    $subject = "New Message from " . $name;
    
    // Message content
    $body = "You have received a new message:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Number: $number\n";
    $body .= "Message: $message\n";
    
    // Send the email
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message.";
    }
}
?>

<section class="contact" id="contact">
    <h1 class="heading">Contact Us</h1>
    <div class="row">
        <!-- Form to send the message -->
        <form action="" method="post">
            <input type="text" name="name" placeholder="Name" class="box" required>
            <input type="email" name="email" placeholder="Email" class="box" required>
            <input type="number" name="number" placeholder="Number" class="box" required>
            <textarea name="message" class="box" placeholder="Message" id="" cols="30" rows="10" required></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>

        <div class="image">
            <img src="images/reviewimg.jpg" alt="contact">
        </div>
    </div>
</section>
