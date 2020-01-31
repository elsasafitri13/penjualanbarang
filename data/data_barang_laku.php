<?php 

// DB table to use
$table = 'barang_laku';

// Table's primary key
$primaryKey = 'id';
// parameter names
$columns = array(
	array( 'db' => 'id', 'dt' => 'id' ),
	array( 'db' => 'id_barang', 'dt' => 'id_barang' ),
	array( 'db' => 'jumlah', 'dt' => 'jumlah' ),
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