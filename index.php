<!doctype html>
<html>
<head>
	<title>Member Table</title>

<!--tinyMce-->
<?php   include "config/connection.php"; include "config/js.php"  ; include "config/functions.php"; error_reporting(0);   
	        include "config/css.php";
?>
</head>
<body>
<br><br><br><br>
   
<div class="row">
	<div class="container">
	
<div class="col-md-12 ">
	


	<?php
 
 if (isset ($_GET['id'])&& $_POST['Save']) {
      	update ($dbc, $_GET['id'] ); 
      }
      elseif(isset($_POST['Save'])) {
        addNew ($dbc);

      }



?>

<form class="form-inline "  method="post" role="form"  >
             <label for="firstname">First Name</label>
            <input name="firstname" class="form-control" type="text" id="firstname" value="<?php   echo select($dbc,$_GET['id']);   ?>" >
            <label for="lastname">Last Name</label>
            <input name="lastname" class="form-control" type="text" id="lastname" value="<?php echo select1($dbc,$_GET['id']); ?>" >
            <label for="age">Age</label>
            <input name="age" class="form-control" type="text" id="age" value="<?php echo  select2($dbc,$_GET['id']);?>" >
             <label for="contact">Contact</label>
            <input name="contact" class="form-control" type="text" id="contact" value="<?php echo  select3($dbc,$_GET['id']);?>" >
           
            <input type="submit" class="btn btn-info" value="Save" name="Save" >

            
            


      </form>




  </div>
</div>
</div><br><br>


      <div class="row">
      <div class="col-md-6 col-md-offset-3">



		<table class="table table-striped table-hover">
                <thead>
                <tr class="success">
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Contact</th>
                    <th>Edit</th>
                    <th>Remove</th>
                </tr>
                 <?php 

               $q3 = "SELECT * FROM user ORDER BY id ASC ";
            $r3 = mysqli_query($dbc, $q3);

              while ( $pics = mysqli_fetch_assoc($r3)) {
                	
                


          ?>
               </thead>
               <tbody>
             
               <tr id="row_<?php echo $pics['id'];?>">
                <td><?php echo $pics['firstname'];  ?></td>
                <td><?php echo $pics['lastname'];  ?></td>
                <td><?php echo $pics['age'];  ?></td>
                <td><?php echo $pics['contact'];  ?></td>
                <td><a    href="?id=<?php echo $pics['id']?>" class="btn btn-info btn-edit"> <i class="fa fa-chevron-right"></i></a></td>
                <td><button id="<?php echo $pics['id'];?>" class="btn btn-danger btn-delete"><i class="fa fa-trash-o"></i></button></td>

               
                </tr>
            <?php } ?>
            </tbody>
        </table>
          
         


       <!--<form method="get" role="form">-->
          <button type="submit" class="btn btn-danger btn-deleteAll"  name="DeleteAll">Delete All</button>
          <a href="index.php" type="submit" class="btn btn-default" id="refresh">Refresh</a>
       <!--</form>-->

	</div>


</div>








</body>
</html>
