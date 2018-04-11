<?php

define('DB_HOSTNAME','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_DATABASE','members_db');

$dbc=mysqli_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


/*if ($dbc){
    echo 'yeah';
}else{
    echo 'Could not connect because:mysqli_connect_error()';
}*/
