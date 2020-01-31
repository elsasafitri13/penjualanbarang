<?php 

// DB table to use
$table = 'supplier';

// Table's primary key
$primaryKey = 'id';
// parameter names
$columns = array(
	array( 'db' => 'id', 'dt' => 'id' ),
	array( 'db' => 'nama', 'dt' => 'nama' ),
	array( 'db' => 'alamat', 'dt' => 'alamat' ),
	array( 'db' => 'no_hp', 'dt' => 'no_hp' ),
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