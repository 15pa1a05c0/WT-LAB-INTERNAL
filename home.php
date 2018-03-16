<!DOCTYPE html>
<html>
    <head>
         <title>Property</title>
         <style>
             li{
                border:2px solid black;
             }
             img{
                  width:100px;
                  height:100px;
             }
         </style>
    </head>
    <body>
    <form action="" method="POST">
    	<label>Search Property by Name:</label>
   	 	<input type="text" name="search">
    	<input type="submit" name="sub">
    </form>
    <a href="add.php">Add Property</a>
    <a href="logout.php">LOGOUT</a>
    </body>
  </html>
<?php
      require "connect.php";
      session_start();
      if(isset($_POST['sub'])){
           $prop=$_POST['search'];
           $qry="SELECT *FROM `property` where prop_name='$prop'";
           $sql=mysqli_query($conn,$qry);
           if(mysqli_num_rows($sql)>0){
                 while($row=mysqli_fetch_assoc($sql)){
                 $img="uploads/".$row['image'];
              $link="display.php?id=".$row['user_id'];
                 $name=$row['prop_name'];
                 $description=$row['description'];     
                 $phno=$row['phno'];
                    echo"<li>";
                    echo"<img src='$img' ><br>";
                   echo "<h3><a href='$link'>$name</a>";
                   echo "<p>$description</p><br>";
                   echo"owner phno:<p>$phno</p>";
                    echo"</li>";
                 }
                 
           }
      }
?>

