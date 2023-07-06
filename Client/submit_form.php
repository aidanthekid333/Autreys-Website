<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form inputs (you can add more validation rules as needed)
    $name = trim($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $phone = trim($_POST["phone"]);
  
    if (!empty($name) && $email && !empty($phone)) {
        // Sanitize form inputs
        $name = htmlspecialchars($name);
        $phone = htmlspecialchars($phone);

        $to = "aidanthra333@gmail.com";
        $subject = "Contact Form Submission";
        $emailContent = "Name: " . $name . "\n";
        $emailContent .= "Email: " . $email . "\n";
        $emailContent .= "Phone: " . $phone . "\n";

        // Set additional headers for the email (optional)
        $headers = "From: Your Website <noreply@yourwebsite.com>\r\n";
        $headers .= "Reply-To: " . $name . " <" . $email . ">\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Send email
        ini_set('SMTP', 'localhost');
        ini_set('smtp_port', 25);
        if (mail($to, $subject, $emailContent, $headers)) {
            echo "Thank you for your submission! We will get back to you shortly.";
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    } else {
        echo "Please fill in all the required fields.";
    }
}
?>