<?php  
include_once("config.php");
$no = $_GET['no'];
$result = mysqli_query($mysqli, "DELETE FROM user WHERE no=$no");
header("Location: index.php");
?>