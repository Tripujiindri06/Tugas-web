<?php
include_once("config.php");
if(isset($_POST['update']))
{   
    $no = $_POST['no'];

    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['emaill'];

    $result = mysqli_query($mysqli, "UPDATE user SET nama='$nama', emaill='$emaill',username='$username', password='$password' WHERE no=$no");
    header("Location: index.php");
}
?>
<?php
$no = $_GET['no'];
$result = mysqli_query($mysqli, "SELECT * FROM user WHERE no='$no'");

while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $username = $user_data['username'];
    $password = $user_data['password'];
    $emaill = $user_data['emaill'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama" required=""> value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>username</td>
                <td><input type="text" name="username" required=""> value=<?php echo $username;?>></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="password" required=""> value=<?php echo $password;?>></td>
            </tr>
            <tr> 
                <td>emaill</td>
                <td><input type="text" name="emaill" required=""> value=<?php echo $emaill
                ;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="no" value=<?php echo $_GET['no'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>