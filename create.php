<?php
    if(isset($_POST['Submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        include ('koneksi.php');

        $result = mysqli_query($koneksi, "INSERT INTO pengguna (username, password) VALUES ('$username', '$password')");

        header("Location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create/Add</title>
</head>
<body>
    <h1>Memasukkan Data pada Database!</h1>
    <table>
        <form action="create.php" method="post">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr><td><input type="submit" value="Submit" name="Submit"></td></tr>
        </form>
    </table>
</body>
</html>