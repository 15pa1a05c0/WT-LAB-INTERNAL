<?php
	require "connect.php";
	session_start();
	if(isset($_POST["sub"])){
	   $username=$_POST['user_name'];
	   $email=$_POST['user_email'];
	   $password=$_POST['user_pass'];
	   $qry="select * from `user` where user_name='$username' and  user_pass='$password'";
	   $sql=mysqli_query($conn,$qry);
	   if(mysqli_num_rows($sql)>0){
	         echo "already exiists ... use another name";
	   }
	   else{
	      $qry="INSERT INTO `user`(user_name,user_email,user_pass)values('$username','$email','$password')";
	      mysqli_query($conn,$qry);
	      header("location:login.php");
	   }
	}
?>
<!DOCTYPE html>
<html>
   <head>
         <title>Login</title>
   </head>
   <body>
         <h1>USER REGISTRATION</h1>
         <form action="" method="POST">
             <label>Name:</label>
             <input type="text" name="user_name" required>
			 <label>Email:</label>
             <input type="email" name="user_email" required>
             <label>Password:</label>
             <input type="password" name="user_pass" required>
	          <input type="submit"  name="sub" value="REGISTER">  
         </form>
         <a href="logout.php">LOGOUT</a>
   </body>
</html>
