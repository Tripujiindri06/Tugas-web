<html>
<head>
    <title>Add User</title>
</head>

<body>
    <a href="index.php">Kembali</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama" required=""></td>
            </tr>
            <tr> 
                <td>username</td>
                <td><input type="text" name="username" required=""></td>
            </tr>
             <tr> 
                <td>password</td>
                <td><input type="text" name="password" required=""></td>
            </tr>
            <tr> 
                <td>email</td>
                <td><input type="text" name="emaill" required=""></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add" required=""></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['emaill'];

        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO user VALUES ('', '$nama','$username','$password','$email')");
        echo "User added successfully. <a href='index.php'>View User</a>";
    }
    ?>
</body>
</html>