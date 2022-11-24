<?php
$servername = "localhost";
$username = "tio";
$password = "tio";
$dbname = "guest";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT g.id, g.nama, g.umur, t.noTelp FROM guest g LEFT JOIN noTelpGuest t ON g.id = t.id";
$result = mysqli_query($conn, $query);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP CRUD</title>
</head>
<body>

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>phone</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['umur']; ?></td>
            <td><?php echo $row['noTelp']; ?></td>
        </tr>
        <?php } ?>
    </table>

    <h1>Create new Guest</h1>
    <form action="routes/create-guest.php" method="post">
        <input type="text" placeholder="Guest ID" name="id">
        <input type="text" placeholder="Name" name="nama">
        <input type="number" placeholder="Age" name="umur">
        <input type="submit" value="Create">
    </form>

    <h1>Create new No Telp</h1>
    <form action="routes/create-notelp.php" method="post">
        <input type="text" placeholder="ID" name="id">
        <input type="text" placeholder="Guets ID" name="guestId">
        <input type="number" placeholder="No Telp" name="noTelp">
        <input type="submit" value="Create">
    </form>

    <h1>Edit Guest</h1>
    <form action="routes/edit-guest.php" method="post">
        <input type="text" placeholder="Guest ID" name="id">
        <input type="text" placeholder="Name" name="nama">
        <input type="submit" value="Edit">
    </form>

    <h1>Edit No Telp</h1>
    <form action="routes/edit-notelp.php" method="post">
        <input type="text" placeholder="Guest ID" name="id">
        <input type="number" placeholder="No Telpon Baru" name="noTelp">
        <input type="submit" value="Edit">
    </form>

</body>
</html>