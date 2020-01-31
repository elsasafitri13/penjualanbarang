<?php 

// DB table to use
$table = 'barang';

// Table's primary key
$primaryKey = 'id';
// parameter names
$columns = array(
	array( 'db' => 'id', 'dt' => 'id' ),
	array( 'db' => 'nama_barang', 'dt' => 'nama_barang' ),
	array( 'db' => 'merk', 'dt' => 'merk' ),
	array( 'db' => 'spesifikasi', 'dt' => 'spesifikasi' ),
	array( 'db' => 'id_supplier', 'dt' => 'id_supplier' ),
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