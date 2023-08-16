<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        // You can retrieve more input variables in a similar manner

        // Compose the email message
        $subject = "Form Submission";
        $message = "Name: $name\n";
        $message .= "Email: $email\n";
        // Add more input variables to the message

        // Send the email
        $to = "nytsantarasolohery@gmail.com"; // Replace with the recipient's email
        $headers = "From: nt.rasolohery@gmail.com"; // Replace with the sender's email
        mail($to, $subject, $message, $headers);

        echo "Form submitted successfully.";
    }
?>