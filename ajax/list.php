<?php
include '../config/connection.php';

   $id=$_GET['id'];
    $q="DELETE  FROM user WHERE id= '$id' ";
    $r3=mysqli_query($dbc,$q);


   // if($r3){echo "yess";}