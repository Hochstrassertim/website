<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = $_POST["first_name_input"];
    $last_name = $_POST["last_name_input"];
    $email = $_POST["email_input"];
    $phone = $_POST["phone_input"];
    $category = $_POST["category_select"];
    $message = $_POST["message_input"];

    // Your email sending logic here
    $to = "your@email.com";
    $subject = "Form Submission - $category";
    $body = "First Name: $first_name\nLast Name: $last_name\nEmail: $email\nPhone: $phone\nCategory: $category\nMessage: $message";

    // Use appropriate headers (e.g., content-type and additional headers)
    mail($to, $subject, $body);

    // You can also include additional logic, such as saving the form data to a database
    // ...

    echo "Form submitted successfully!";
} else {
    echo "Invalid request method!";
}
?>
