<?php  
 include "dbcon.php";

   if(isset($_POST['name']) && isset($_POST['phone'])){


      $s="INSERT into `enquiry`(`name`,`phone`) VALUES('".$_POST['name']. " ',' ".$_POST['phone']." ')";

      if(mysqli_query($connect,$s)){
           
        echo "Submitted";

      }

      else{

         echo"Error";
      }
   }

?>

