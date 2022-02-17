<?php
 $state=$_GET['state'];
 $servername="localhost";
 $username="nileshp";
 $password="1234";
 $db="State";
 $conn=mysqli_connect($servername,$username,$password,$db);
 $sql="SELECT*FROM state WHERE State='$state'";
 $result=mysqli_query($conn,$sql); 
 if($result)
 {
   while($row=mysqli_fetch_row($result))
   {
       echo"<option>$row[1]</option>";
   }

}
?>
















































<!--  if($state=="Rajasthan")
 {
     foreach($c1 as $c)
     {
         echo"<option>$c</option>";
     }
 }
 else if($state=="Gujrat")
 {
     foreach($c2 as $c)
     {
         echo"<option>$c<option>";
     }
 }
 else if($state=="Uttar Pradesh")
 {
     foreach($c2 as $c)
     {
         echo"<option>$c<option>";
     }
 }
 else
 {
     echo"<option>Select State first</option>";
 }
  -->