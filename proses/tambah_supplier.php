<?php
	require '../config.php';

	if($_POST['nama'] != null) {
		$request = $_POST;
		$id = $_POST['id'];
		$nama = $request['nama'];
		$alamat = $request['alamat'];
		$no_hp = $request['no_hp'];

		// Kondisi ketika tambah data supplier / ketika tekan tombol simpan
		if($_POST["id"] == ''){
			$sql_tambah = mysqli_query($conn, "INSERT INTO supplier (nama ,alamat,no_hp) VALUES ('$nama', '$alamat', '$no_hp')");
			if(json_encode($sql_tambah) !== false){
				$message = array(
					'status' => 200,
					'msg' => 'Data Berhasil Ditambahkan!'
				);
			}else{
				$message = array(
					'status' => 422,
					'msg' => 'Data Gagal Ditambahkan!'
				);
			}

			echo json_encode($message);
		}else{
			// print_r($_POST);
			$sql_ubah = mysqli_query($conn, "UPDATE supplier SET
				nama = '$nama',
				alamat = '$alamat',
				no_hp = '$no_hp'
				WHERE id = $id
				");
			if(json_encode($sql_ubah) !== false){
				$message = array(
					'status' => 200,
					'msg' => 'Data Berhasil Diubah!'
				);
			}else{
				$message = array(
					'status' => 422,
					'msg' => 'Data Gagal Diubah!'
				);
			}

			echo json_encode($message);
		}
		
	}else{
				$message = array(
					'status' => 422,
					'msg' => 'Data Gagal Ditambahkan!'
				);
				echo json_encode($message);
	}


?>