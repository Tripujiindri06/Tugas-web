<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY no DESC");
?>

<html>
<head>    
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Project CRUD</a>
  </div>
</nav>
<table class="table w-75 p-3 mx-auto mt-2 bg-light">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">E-mail</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $no = 1; 
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['username']."</td>";
        echo "<td>".$user_data['password']."</td>";
        echo "<td>".$user_data['emaill']."</td>";    
        echo "<td><a href='edit.php?no=$user_data[no]'>Edit</a> | <a href='delete.php?no=$user_data[no]'>Delete</a></td></tr>";        
    }
    ?>
  </tbody>
</table>
<a href="add.php">Tambahkan User</a><br/><br/>
    
    </table>
</body>
<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>