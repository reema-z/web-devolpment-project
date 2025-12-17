<?php
$conn = mysqli_connect("localhost", "root", "", "visit_saudi");

if (!$conn) {
    die("Could not connect to database " . mysqli_connect_error());
}

$debug_mode = false;

if ($debug_mode) {
    echo "<h2>Connection Successfully done!</h2>";
}
?>