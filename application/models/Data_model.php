<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Data_model extends CI_Model {
  public function __construct() {
    parent::__construct();
  }
  
  function getData(){
	  $query = $this->db->get('kependudukan');
	  return $query->result();
  }
  
  function getDatas(){
	  // DB table to use
$table = 'kependudukan';
 
// Table's primary key
$primaryKey = 'nik';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'nik', 'dt' => 0 ),
    array( 'db' => 'nama',  'dt' => 1 ),
    array( 'db' => 'alamat',   'dt' => 2 ),
    array( 'db' => 'nomorrumah',     'dt' => 3 ),
    array(
        'db'        => 'tanggallahir',
        'dt'        => 4,
        'formatter' => function( $d, $row ) {
            return date( 'jS M y', strtotime($d));
        }
    ),
	array( 'db' => 'pekerjaan',     'dt' => 5 ),
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'u5833797_peninggaran',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
include(APPPATH.'libraries/ssp.class.php');
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
  }//end getDatas
	
}