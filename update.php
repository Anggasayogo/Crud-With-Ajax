<?php
include 'conection/conect.php';

$id = $_GET['id'];

$nama = $_POST['nama'];
$email = $_POST['email'];
$hoby = $_POST['hoby'];

$query = "UPDATE user SET nama='$nama', email='$email', hoby='$hoby' WHERE id='".$id."' ";
$respons = mysqli_query($conn , $query);
?>