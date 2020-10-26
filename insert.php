<?php  
	$connect = mysqli_connect("127.0.0.1", "root", "", "shop");

	$ins = "INSERT INTO info (name, description, price, img) VALUES ('".$_GET['name']."', '".$_GET['description']."', '".$_GET['price']."', '".$_GET['img']."')";
	mysqli_query($connect, $ins);
	header('Location: index.php');
?>