<?php
include 'conection/conect.php';

$id = $_GET['id'];

$query = "DELETE FROM user WHERE id='".$id."' ";
$respons = mysqli_query($conn , $query);
?>