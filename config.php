<?php
$servername = 'sql108.infinityfree.com';
$username = 'if0_36805845';
$password = 'p6s0mAdMraCP'; // Replace with your actual password
$database = 'if0_36805845_flower';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
