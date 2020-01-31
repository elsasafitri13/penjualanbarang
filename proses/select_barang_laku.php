<?php 
	include('../config.php');

	if(isset($_POST["id"]))
	{
		$query = "SELECT * FROM barang_laku WHERE id = '".$_POST["id"]."'";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($result);
		echo json_encode($row);
	}
?>