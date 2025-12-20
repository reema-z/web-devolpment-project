
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Feedback</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/feedback.css">
<style>
body {
    margin: 0;
    padding: 0;
    display: block;  }

.navbar,
nav {
    text-align: center;
    font-family: Georgia, 'Times New Roman', Times, serif;
    width: 100%;
    display: block;
    
}

.feedback-container {
    width: 90%;
    max-width: 1000px;
    margin: 40px auto;  
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}
  </style>
</head>

<body>
  <header>
   <?php
  include "navbar.php";
?>
</header>
    <main class="feedback-container">
        <form action="save_feedback.php" method="POST">
            
            <h2>Feedback Form</h2>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required minlength="3" placeholder="Your Name">

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required placeholder="Your Email">

            <p><label>Feedback:
            <textarea name="message" rows="8" cols="65" required placeholder="Write your feedback..."></textarea>
            </label></p>

            <button type="submit">Submit Feedback</button>

            <p style="text-align: center;">We value your opinion 💚</p>
        </form>

    </main>

</body>

</html>
