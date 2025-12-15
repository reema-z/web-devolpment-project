<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['email'];
    $password = $_POST['password'];
     $name = $_POST['name'];



    // Connect to DB
    $con = new mysqli('localhost', 'root', '', 'visit_saudi');
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Check if username already exists
    $checkQuery = "SELECT * FROM tourist WHERE username='$username'";
    $result = mysqli_query($con, $checkQuery);

    if (mysqli_num_rows($result) > 0) {
        // Username taken
        echo "<script>
                alert('Username already exists. Please choose another.');
                window.location.href='registration.php';
              </script>";
        exit();
    } else {
        // Insert new user
        $insertQuery = "INSERT INTO tourist (name, username, password) VALUES ('$name','$username', '$password')";
        if (mysqli_query($con, $insertQuery)) {
            echo "<script>
                    alert('Registration successful! Now you can login.');
                    window.location.href='signUp.php';
                  </script>";
            exit();
        } else {
            echo "<script>
                    alert('Error registering. Please try again.');
                    window.location.href='registration.php';
                  </script>";
            exit();
        }
    }

    mysqli_close($con);
}
?>
