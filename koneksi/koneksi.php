<?php 
	$server 			= "localhost";
	$username 			= "root";
	$password 			= "";
	$database 			= "db_ppat";
	$koneksiserver 		= mysql_connect($server,$username,$password)or die("server of");
	$koneksidatabase 	= mysql_select_db($database) or die("server of ");
 ?>
 <?php 
 // FUNGSI DATE CONVERT
	function jin_date_sql($date){
		$exp = explode('/',$date);
		if(count($exp) == 3) {
			$date = $exp[2].'-'.$exp[1].'-'.$exp[0];
		}
		return $date;
	}
 
function jin_date_str($date){
	$exp = explode('-',$date);
	if(count($exp) == 3) {
		$date = $exp[2].'/'.$exp[1].'/'.$exp[0];
	}
	return $date;
}
  ?>