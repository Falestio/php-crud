<?php
$servername = "localhost";
$username = "tio";
$password = "tio";
$dbname = "guest";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST['id'];
$guestId = $_POST['guestId'];
$noTelp = $_POST['noTelp'];

$query = "INSERT INTO notelpguest (id, guestId, noTelp) VALUES ('$id', '$guestId', '$noTelp')";
mysqli_query($conn, $query);
mysqli_close($conn);

header("Location: ../index.php");
?>