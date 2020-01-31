<?php 

// DB table to use
$table = 'mutasi_barang';

// Table's primary key
$primaryKey = 'id';
// parameter names
$columns = array(
	array( 'db' => 'id', 'dt' => 'id' ),
	array( 'db' => 'id_barang', 'dt' => 'id_barang' ),
	array( 'db' => 'id_supplier', 'dt' => 'id_supplier' ),
	array( 'db' => 'jumlah', 'dt' => 'jumlah' ),
	array( 'db' => 'jenis', 'dt' => 'jenis' ),
	array( 'db' => 'tanggal_masuk', 'dt' => 'tanggal_masuk' ),
	array( 'db' => 'tanggal_keluar', 'dt' => 'tanggal_keluar' ),
);

// SQL server connection information
$sql_details = array(
	'user' => 'root',
	'pass' => '',
	'db'   => 'penjualanbarang',
	'host' => 'localhost'
);
require( 'ssp.class.php' );

echo json_encode(
	SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
);


?>