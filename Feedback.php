<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Feedback Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\nav.css">
    <link rel="stylesheet" href="css\feedback.css">

</head>

<body>

    <main class="feedback-container">
        <form action="index.html" method="post">
            <h2>Feedback Form</h2>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required minlength="3" placeholder="Your Name">

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required placeholder="Your Email">

            <p><label>Feedback:
                    <textarea name="feedback" rows="8" cols="65" required
                        placeholder="Write your feedback..."></textarea>
                </label></p>

            <button type="submit">Submit Feedback</button>

            <p style="text-align: center;">We value your opinion 💚</p>
        </form>

    </main>

</body>

</html>