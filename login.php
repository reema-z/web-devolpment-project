<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


$con = new mysqli('localhost', 'root', '', 'visit_saudi');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username exists
    $checkUserQuery = "SELECT * FROM tourist WHERE username='$username'";
    $userResult = mysqli_query($con, $checkUserQuery);

    if (mysqli_num_rows($userResult) == 0) {
        // Username does not exist
        echo "<script>
                alert('No such username. Please register first!');
                window.location.href='login.php';
              </script>";
        exit();
    } else {
        // Check password
        $checkPassQuery = "SELECT * FROM tourist WHERE username='$username' AND password='$password'";
        $passResult = mysqli_query($con, $checkPassQuery);

        if (mysqli_num_rows($passResult) == 1) {
        // Fetch user data
        $row = mysqli_fetch_assoc($passResult);

        // Correct login → store name in session
        $_SESSION['user'] = $row['name']; 
        header("Location: index.php");
        exit();
    }
 else {
            // Wrong password
            echo "<script>
                    alert('Invalid password!');
                    window.location.href='signUp.php';
                  </script>";
            exit();
        }
    }
}

mysqli_close($con);
?>
