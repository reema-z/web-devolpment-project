<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<?php

include'conn.php';

$show_query ="SELECT * FROM feedback1";

$check_query=mysqli_query($conn,$show_query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Feedback</title>
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
  <header >
   <?php
  include "navbar.php";
?>
</header>
    <div class="feedback-container">
  <h2 style="text-align: center;">All Feedbacks</h2>
  <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
      </tr>
    
    <?php
    $id_counter=1;
        if(mysqli_num_rows($check_query)>0){
            while($data =mysqli_fetch_assoc($check_query))

            echo"<tr>
            <td>".$id_counter++."</td>
            <td>".$data['name']."</td>
            <td>".$data['email']."</td>
            <td>".$data['message']."</td>
            </tr>";
        }
    ?>

      
  </table>
</div>

</body>

</html>
