<?php 

//include 'connection.php';

function select($dbc,$id){

	$q3 = "SELECT * FROM user WHERE id = $id ";
            $r3 = mysqli_query($dbc, $q3);
            $row1=mysqli_fetch_assoc($r3);
            return $row1['firstname'];


}
 
 function select1($dbc,$id){

	$q1 = "SELECT * FROM user WHERE id = $id ";
            $r39 = mysqli_query($dbc, $q1);
            $row6=mysqli_fetch_assoc($r39);
            return $row6['lastname'];


}
function select2($dbc,$id){

	$q8 = "SELECT * FROM user WHERE id = $id ";
            $r11 = mysqli_query($dbc, $q8);
            $row7=mysqli_fetch_assoc($r11);
            return $row7['age'];


}

function select3($dbc,$id){

	$q30 = "SELECT * FROM user WHERE id = $id ";
            $r31 = mysqli_query($dbc, $q30);
            $row11=mysqli_fetch_assoc($r31);
            return $row11['contact'];


}

function update ($dbc, $id ) {

       $firstname= $_POST['firstname'];
      	$lastname=$_POST['lastname'];
      	$age=$_POST['age'];
      	$contact=$_POST['contact'];
      	$q100="UPDATE user SET firstname ='$firstname', lastname= '$lastname', age='$age', contact='$contact'  WHERE id= $id";
      	if(mysqli_query($dbc,$q100)){

      		return true;
      	}
      	
      	



}


function addNew ($dbc,$firstname,$lastname,$age,$contact){
       $firstname= $_POST['firstname'];
        $lastname=$_POST['lastname'];
        $age=$_POST['age'];
        $contact=$_POST['contact'];
  $q4="INSERT INTO user(firstname,lastname,age,contact) VALUES ('$firstname','$lastname','$age','$contact') ";
        if (mysqli_query($dbc,$q4)) {
           return true;
        }
     


}





 /*function deleteAll ($dbc){

       $q79="DELETE * FROM user";
       if(mysqli_query($dbc,$q79)){

        return true;
       }


 }*/
?>