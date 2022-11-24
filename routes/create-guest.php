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
$umur = $_POST['umur'];

$query = "INSERT INTO guest (id, nama, umur) VALUES ('$id', '$nama', '$umur')";
mysqli_query($conn, $query);
mysqli_close($conn);

header("Location: ../index.php");
?>