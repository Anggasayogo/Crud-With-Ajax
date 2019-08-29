<?php 

include 'conection/conect.php';

// $nama = 'Azam';
// $email = 'azam@gmail.com';
// $hoby = 'programin';

if(isset($_POST['nama'])){
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$hoby = $_POST['hoby'];

		$query = "INSERT INTO user SET nama='$nama',email='$email', hoby='$hoby' ";

		$result = mysqli_query($conn, $query);

		if($result){
			echo "Data Berhasil Di Tambahkan";
		}else{
			echo "<script>alert('gagal di tambahkan gan !')</script>";
		}
	}


?>