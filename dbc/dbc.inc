<?php
$autoninja_pwd = 'atn#najio$u';
$_TZ = "Asia/Kolkata";
date_default_timezone_set($_TZ);
function mysqli_tz_connect($db_server, $db_user, $db_pass, $db_db=null, $db_port=3306){
    global $_TZ;
    if (empty($db_db)) $dbn = mysqli_connect($db_server, $db_user, $db_pass);
    else $dbn = mysqli_connect($db_server, $db_user, $db_pass, $db_db, $db_port);
    if ($dbn) {
        $q = "SET time_zone = '$_TZ';";
        mysqli_query($dbn,$q);
    }
    return $dbn;
}
$db_server = 'localhost';
$db_user = 'root';
$db_pass = 'ninjacrm';
$db_port = 3306;
$_dbRep = ['host'=>'localhost','user'=>'root','pass'=>'ninjacrm','port'=>'3306'];
define('BASE_API_URL','http://localhost/ninjacrm/console_reloaded/public/common/v1/');

?>
