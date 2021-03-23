<?php
	$conn = new mysqli("localhost","root","","produk");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}else{
		// echo "berahasil connect";
	}
?>