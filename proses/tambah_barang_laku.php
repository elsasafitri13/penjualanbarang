<?php 

	require '../config.php';
	
	if($_POST['id_barang'] != null){

	$request = $_POST;
	$id = $_POST['id'];
	$id_barang = $request['id_barang'];
	$jumlah = $request['jumlah'];

	// kondisi ketika tambah data barang/ketika tekan tombol simpan
	if($_POST["id"] == ''){
		$cek = mysqli_query($conn, "SELECT stok FROM stok WHERE id_barang = ".$id_barang."");
		$hasil[0] = [];
		while($row = $cek->fetch_row()) {
		  $hasil[]=$row;
		}

		$nama = mysqli_query($conn, "SELECT nama_barang FROM barang WHERE id = ".$id_barang."");
		$nama_brg[0] = [];
		while($row = $nama->fetch_row()) {
		  $nama_brg[]=$row;
		}
		$nama_barang = $nama_brg[1][0];
		$sql_tambah = mysqli_query($conn, "INSERT INTO barang_laku (id_barang, jumlah, nama_barang) VALUES ('$id_barang', '$jumlah', '$nama_barang')");

		if (count($hasil[0])>0) {
			$jumlah_stok = $hasil[0][0] - $jumlah;
			// update sisa ke tblbarang
			$update = mysqli_query($conn, "UPDATE stok SET
			jumlah = '$jumlah_stok'
			WHERE id_barang = ".$id_barang."");

		 } else{
		 	$sql_tambah_stok = mysqli_query($conn, "INSERT INTO stok (id_barang, stok) VALUES ('$id_barang', '$jumlah')");
		 }

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
			$sql_ubah = mysqli_query($conn, "UPDATE barang_laku SET
				id_barang = '$id_barang',
				jumlah = '$jumlah'
				WHERE id = $id
				");
				if(json_encode($sql_ubah) !== false){
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
			}
		}

			

 ?>