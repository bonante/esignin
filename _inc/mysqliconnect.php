<?php
//Database Information
define('DB_NAME','esignin');
define('DB_USER','esignin');
define('DB_PASSWORD','bUK9uSRhR4ZBQmLG');
define('DB_HOST','localhost');
$mysqlicon = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//Check connection
if(!$mysqlicon){$online = 'false';}
else {$online = 'true';}

?>