<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');

$str = $_GET['term'];

if (strlen($str) > 2) {

	$db = new SQLite3("../data/usuarios.db");

	$cs = $db -> query("SELECT * FROM login WHERE empresa LIKE '%$_GET[term]%' ORDER BY empresa LIMIT 5;");
		    
	while($resul = $cs->fetchArray()) {
	  $return_arr[] =  $resul['empresa'];
	}
	echo json_encode($return_arr);

	$db -> close();
}


 ?>