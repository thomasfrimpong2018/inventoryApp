<script src="https://use.fontawesome.com/03638eeb4c.js"></script>

<!--JQuery User Interface & other effects
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
<!--jQuery CDN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script type="text/javascript">

$("document").ready(function () {

        $(".btn-delete").on("click", function () {
            var pageId = $(this).attr("id");
          
            var confirmed=confirm("Are you sure you want to delete this  record?");

            if (confirmed){

           $.get("ajax/list.php", {id: pageId});
               
           
           //$("#table"+pageId).remove();
                alert('Record Deleted');

                $("#row_"+pageId).remove();
            }





        })


    
    $(".btn-deleteAll").on("click",function(){

        var confirmation = confirm("Are you sure you want to delete all the records");
        if (confirmation) {

       $.get("ajax/clear.php");
       alert("All Records are Deleted");
       $(".table").remove();
       }


    });





    });


</script>



