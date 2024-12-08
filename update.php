<?php
    include ('koneksi.php');
    if(isset($_POST['Update'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        include ('koneksi.php');
    
        $result = mysqli_query($koneksi, "UPDATE pengguna SET username='$username', password='$password' WHERE id='$id'");
    
        header("Location:index.php");
    }

    $id=$_GET['id'];
    $result = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE id=$id");
    while($user_data = mysqli_fetch_array($result)){
        $username = $user_data['username'];
        $password = $user_data['password'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Edit User Data
    </title>
</head>
<body>
    <a href="index.php">Batal</a>
    <br/><br/>
    <form action="update.php" method="post">
        <table border="1">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value=<?php echo $username;?>></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value=<?php echo $password;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php $_GET['id'];?>></td>
                <td><input type="submit" value="Update" name="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>