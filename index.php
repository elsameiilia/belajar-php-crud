<?php
    include ('koneksi.php');
    $read=mysqli_query($koneksi, "SELECT * FROM pengguna ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar CRUD</title>
</head>
<body>
    <h1>Menampilkan data dari database!</h1>
    <a href="create.php"><button>Tambah Data</button></a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Operasi</th>
        </tr>
        <?php
        while ($data_pengguna = mysqli_fetch_array($read)){
            echo "<tr>";
            echo "<td>".$data_pengguna['id']."</td>";
            echo "<td>".$data_pengguna['username']."</td>";
            echo "<td>".$data_pengguna['password']."</td>";
            echo "<td><a href='update.php?id=$data_pengguna[id]'>Edit</a></td>";
            echo "<td><a href='delete.php?id=$data_pengguna[id]'>Delete</a></td>";
        }
        ?>
    </table>
</body>
</html>