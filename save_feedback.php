<?php

include 'conn.php';

$name = $_POST['name'];
$em = $_POST['email'];
$msg = $_POST['message'];

$data_insert = "INSERT INTO feedback1(name, email, message) values('$name','$em','$msg')";

$check_query=mysqli_query($conn,$data_insert);

if($check_query){
    echo"
    <!DOCTYPE html>
<html lang='en'>

<head>
    <title>save_feedback</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='css/nav.css'>
    <link rel='stylesheet' href='css/feedback.css'>
</head>

<body>

    <main class='feedback-container'>
            
            <h2 style='text-align: center;'>✅ Thank You for Your Feedback!</h2>
            
            <p style='text-align: center;'>We really apprecite your time and opinion.</p> 

            <a href='view_feedback.php'>View All Feedbacks</a>
            <a href='Feedback.php'>Give Another</a>

    </main>

</body>

</html>";
}
else{
    echo"data is not inserted";
}

?>