
<?php
require 'koneksi.php';
$table = <<<EOT
 ( SELECT * FROM data_sample) viewData
EOT;
$primaryKey = 'id_auto';
$columns = array(

	array( 'db' => 'id_auto', 'dt' => 0 ),
	array( 'db' => 'nama', 'dt' => 1 ),
	array( 'db' => 'pekerjaan',  'dt' => 2 ),

);

// SQL server connection information
$sql_details = array(
	'user' => $dbuser,
	'pass' => $dbpass,
	'db'   => $dbname,
	'host' => $dbhost
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );
// require '../../config/ssp.class.php';
echo json_encode(
	SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);

?>


