<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];

  $to = "none@gmail.com";

  $emailSubject = "New Website Enquiry";

  $emailBody = "first name: $fname.\n" .
    "last name: $lname.\n" .
    "email: $email.\n" .
    "message: $subject.\n.";


  $headers .= "Reply-To: $email \r\n";



  mail($to, $emailSubject, $emailBody, $headers);
};

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Purrfect Vacation</title>
  <link rel="stylesheet" href="/images/">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="/images/purr-fect logo.png" type="img" src="/images/purr-fect logo.png">
  <link rel="stylesheet" href="/css/index.css">

  <img class="thankYouLogo" src="/images/purrfectLogo.png" alt="" style="height: auto; width: 50%; margin-left: 25%; margin-right: 25%">
  <h1 style="text-align: center">Thank you for getting in contact, I will be in touch asap.</h1>
  <p style="text-align: center">Return to the <a href="deafault.html/">hompage</p>
