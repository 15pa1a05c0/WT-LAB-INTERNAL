<!DOCTYPE HTML>
<html>
   <head>
       <style>
          li{
                 margin:10%;
               border:1px solid black;
          }
          img{
               width:100px;
                height:100px;
          }
          
       </style>
   </head>
</html>

<?php
      require "connect.php";
           $qry="SELECT *FROM `property`";
           $sql=mysqli_query($conn,$qry);
           if(mysqli_num_rows($sql)>0){
                 while($row=mysqli_fetch_assoc($sql)){
                 $img="uploads/".$row['image'];
                 $link="display.php?id=".$row['user_id'];
                 $name=$row['prop_name'];
                 $description=$row['description'];     
                    echo"<li >";
                    echo"<img src='$img'>";
                    echo "<h3><a href='$link'>$name</a>";
                   echo "<p>$description</p>";
                    echo"</li>";
                 }                 
           }
?>

