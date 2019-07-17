<?php
$connection = mysqli_connect('localhost','root', '', 'project1');
$id = $_GET['id'];
$query = "DELETE from Users WHERE id='$id'";


$result = mysqli_query($connection,$query);



 ?>
