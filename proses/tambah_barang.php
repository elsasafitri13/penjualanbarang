<?php
	require '../config.php';

	if($_POST['nama_barang'] != null) {
		$request = $_POST;
		$id = $_POST['id'];
		$nama_barang = $request['nama_barang'];
		$merk = $request['merk'];
		$spesifikasi = $request['spesifikasi'];

		// Kondisi ketika tambah data barang / ketika tekan tombol simpan
		if($_POST["id"] == ''){
			$sql_tambah = mysqli_query($conn, "INSERT INTO barang (nama_barang ,merk,spesifikasi) VALUES ('$nama_barang', '$merk', '$spesifikasi')");
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
			$sql_ubah = mysqli_query($conn, "UPDATE barang SET
				nama_barang = '$nama_barang',
				merk = '$merk',
				spesifikasi = '$spesifikasi'
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