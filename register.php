<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
    <title> Responsive Registration Form in PHP</title>
     
</head>

  <body>  
    
        <h2>Register Users</h2>
 
     
     <form method="POST" action="register.php">
      <?php include('errors.php');?>
     
        <label>Username:</label>
         <input type="text" name="username" value="" >
       

      
        <label>Email:</label>
       <input type="text" name="email" value="" >
      
 
       <label>Password:</label>
       <input type="password" name="password_1">
       
 
       <label> Confirm Password:</label>
       <input type="password" name="password_2">
   

      
       <button type="submit" class="btn" name="reg_user">Register</button>
      
      <p>
         Already Registered? <a href="login.php">Sign In</a>
      </p>
     </form>
  </body>
   
</html>