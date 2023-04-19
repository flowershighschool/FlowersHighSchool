<?php
// Define and initialize the $formSubmissionSuccessful variable
$formSubmissionSuccessful = false;

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Form validation logic
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  // Validate name
  if (empty($name)) {
    $nameError = "Please enter your full name";
  } elseif (!preg_match("/^[a-zA-Z]+\s[a-zA-Z]+$/", $name)) {
    $nameError = "Please enter a valid full name";
  }

  // Validate email
  if (empty($email)) {
    $emailError = "Please enter your email";
  } elseif (!preg_match("/[a-zA-Z0-9._%+-]+@.+\.com$/", $email)) {
    $emailError = "Please enter a valid email ending with '.com'";
  }

  // Validate phone
  if (empty($phone)) {
    $phoneError = "Please enter your phone number";
  }

  // Validate message
  if (empty($message)) {
    $messageError = "Please enter your message";
  }

  // If form validation passes
  if (empty($nameError) && empty($emailError) && empty($phoneError) && empty($messageError)) {
    // Set formSubmissionSuccessful to true
    $formSubmissionSuccessful = true;
  }
}

// If form submission is successful
if ($formSubmissionSuccessful) {
  // Redirect to index.php
  header("Location: ../index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Adam Farouk">
    <meta name="description" content="Welcome to Flowers High School! Get the best education with experienced faculty and modern facilities.">
    <meta name="keywords" content="flowers high school, education, faculty, facilities">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="image" content="flowerslogo.png">
    <meta property="og:title" content="Flowers High School">
    <meta property="og:description" content="Welcome to Flowers High School! Get the best education with experienced faculty and modern facilities.">
    <meta property="og:image" content="flowerslogo.png">
    <meta property="og:url" content="https://flowershighschool.github.io/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Flowers High School">
    <meta name="twitter:title" content="Flowers High School">
    <meta name="twitter:description" content="Welcome to Flowers High School! Get the best education with experienced faculty and modern facilities.">
    <meta name="twitter:image" content="flowerslogo.png">
    <title>Flowers High School | Contact Us</title>
    <link rel="shortcut icon" type="images" href="fhs/images/flowerslogo.png">
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <style>
      a {
        color: #555;
        text-decoration:none;
      }
      .error {
  color: red;
  margin-top: 5px;
}

    </style>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
          The contact page of Flowers High School facilitates easy communication for inquiries and feedback.
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p><a href="https://goo.gl/maps/kUn8mYLEZCzVzt5C7">LOT.ISMAILIA 7, N°49 Bd El Mourabitine, Meknès 50000</a></p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>flowershighschool@hotmail.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>05355-22212</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
            <a href="https://www.facebook.com/FlowersHighSchool" target="_blank">  
                <i class="fab fa-facebook-f"></i>
            </a>

            <a href="https://www.instagram.com/flowershighschool/" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>

            <a href="https://www.linkedin.com/in/school-flowers-b1395868/?originalSubdomain=ma" target="_blank">
                <i class="fab fa-linkedin-in"></i>
            </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action=" ../index.php" method="post" autocomplete="off">
          <h3 class="title">Contact us</h3>
          <div class="input-container">
          <input type="text" name="name" class="input" pattern="[a-zA-Z]+\s[a-zA-Z]+" required />
          <div id="nameError" class="error"></div>
            <label for="">Full name</label>
            <span>Full name</span>
          </div>
          <div class="input-container">
          <input type="email" name="email" class="input" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com)$" required />
            <label for="">Email</label>
            <span>Email</span>
          </div>
          <div class="input-container">
          <div class="input-container">
          <input type="tel" name="phone" class="input" pattern="^[\d+]{1,15}$" required />
  

            <label for="">Phone</label>
            <span>Phone</span>
          </div>
          <div class="input-container textarea">
            <textarea name="message" class="input" required></textarea>
            <label for="">Message</label>
            <span>Message</span>
          </div>
          <input type="submit" name="submit" value="Send" class="btn" />
           </form>

        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>