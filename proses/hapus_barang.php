<?php 
	require '../config.php';

	// print_r($_POST);
	$id = $_POST['id'];
	$sql_hapus = mysqli_query($conn, "DELETE FROM barang WHERE id = $id");

	if(json_encode($sql_hapus) !== false){
				$message = array(
					'status' => 200,
					'msg' => 'Data Berhasil Dihapus!'
				);
			}else{
				$message = array(
					'status' => 422,
					'msg' => 'Data Gagal Dihapus!'
				);
			}

			echo json_encode($message);

?>