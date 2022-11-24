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
$nama = $_POST['nama'];

$query = "UPDATE guest SET nama = '$nama' WHERE id = '$id'";
mysqli_query($conn, $query);
mysqli_close($conn);

header("Location: ../index.php");
?>