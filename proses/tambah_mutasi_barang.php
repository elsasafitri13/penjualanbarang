<?php 

	require '../config.php';
	
	if($_POST['id_barang'] != null){

	$request = $_POST;
	$id = $_POST['id'];
	$id_barang = $request['id_barang'];
	$id_supplier = $request['id_supplier'];
	$jumlah = $request['jumlah'];
	$jenis = $request['jenis'];
	$tanggal_masuk = $request['tanggal_masuk'];
	$tanggal_keluar = $request['tanggal_keluar'];

	// kondisi ketika tambah data barang/ketika tekan tombol simpan
	if($_POST["id"] == ''){
		$cek = mysqli_query($conn, "SELECT * FROM stok WHERE id_barang = ".$id_barang."");
		$hasil[0] = [];
		while($row = $cek->fetch_row()) {
		  $hasil[]=$row;
		}

		var_dump($hasil);
		$nama = mysqli_query($conn, "SELECT nama_barang FROM barang WHERE id = ".$id_barang."");
		$nama_brg[0] = [];
		while($row = $nama->fetch_row()) {
		  $nama_brg[]=$row;
		}
		$nama_barang = $nama_brg[1][0];

		$nm = mysqli_query($conn, "SELECT nama_supplier FROM supplier WHERE id = ".$id_supplier."");
		$nama_spl[0] = [];
		while($row = $nm) {
		  $nama_spl[]=$row;
		}
		$nama_supplier = $nama_spl[0];

		$sql_tambah = mysqli_query($conn, "INSERT INTO mutasi_barang (id_barang, id_supplier, jumlah, jenis, tanggal_masuk, tanggal_keluar) VALUES ('$id_barang', '$id_supplier', '$jumlah', '$jenis', '$tanggal_masuk', '$tanggal_keluar')");
		if (count($hasil)>0) {
			$jumlah_stok = $hasil['stok'] + $jumlah;
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
				id_supplier = '$id_supplier',
				jumlah = '$jumlah',
				jenis = '$jenis',
				tanggal_masuk = '$tanggal_masuk',
				tanggal_keluar = '$tanggal_keluar'
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