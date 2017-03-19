<?php

putenv("ORACLE_HOME=:/home/oracle/app/product/11.2.0/dbhome_1");

$conn = oci_connect('cs3420', 'c3m4p2s', '(DESCRIPTION=(ADDRESS=(PROTOCOL=tcp)
	(HOST=delphi.cs.csubak.edu)
	(PORT=1521))
	(CONNECT_DATA=(SID=dbs01)))');
/*
if($conn){
	echo "\nConnected Successfully";
} else {
	echo "\nCould Not Connect";
	return;
}
*/

?>


