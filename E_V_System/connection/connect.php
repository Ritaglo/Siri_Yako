<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= 'Praiserael128';
$db_database	= 'electronicvoting'; 

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>