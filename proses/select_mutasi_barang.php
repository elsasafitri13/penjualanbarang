<?php 
	include('../config.php');

	if(isset($_POST["id"]))
	{
		$query = "SELECT * FROM mutasi_barang WHERE id = '".$_POST["id"]."'";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($result);
		echo json_encode($row);
	}
?>