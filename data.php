<?php
include 'conection/conect.php';

$query = "SELECT * FROM user";
$respons = mysqli_query($conn , $query);

if(mysqli_num_rows($respons) > 0){
	while($row = mysqli_fetch_assoc($respons)){
		$delete = "<a class='hapusData' href='delete.php?id=".$row['id']."' >Delete</a>";
		$update = "<a href='update.php?id=".$row['id']."' class='updateData' nama='".$row['nama']."' email='".$row['email']."' hoby='".$row['hoby']."'>Update</a>";
		echo $row['nama']." => ".$row['email']." => ".$row['hoby']." ".$update." | ".$delete."<br>";
	}
}