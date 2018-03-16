<?php
	require "connect.php";
	session_start();
	if(isset($_POST["sub"])){
	   $username=$_POST['user_name'];
	   $email=$_POST['user_email'];
	   $password=$_POST['user_pass'];
	   $qry="SELECT * FROM `user` where user_name='$username' and user_pass='$password';";
	   $sql=mysqli_query($conn,$qry);
	   if(mysqli_num_rows($sql)>0){
	         $qry="SELECT user_id FROM `user` where user_name='$username' and user_pass='$password';";
	         $sql=mysqli_query($conn,$qry);
	         $row=mysqli_fetch_assoc($sql);
	         $_SESSION['userid']=$row['user_id'];
	         print_r($_SESSION);
	          header("location:home.php");
	   }
	   else{
	  			 echo "invalid login";
	   }	   
	}
?>
<!DOCTYPE html>
<html>
   <head>
         <title>Login</title>
   </head>
   <body>
         <h1>USER LOGIN</h1>
         <form action="" method="POST">
             <label>Name:</label>
             <input type="text" name="user_name" required>
			 <label>Paswword:</label>
             <input type="password" name="user_pass" required>
	          <input type="submit"  name="sub" value="LOGIN">  
         </form>
         <a href="logout.php">LOGOUT</a>
   </body>
</html>
