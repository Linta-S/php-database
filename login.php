<?php include('server.php');?>
<!DOCTYPE html>
<html>
   <head>
     <title> Responsive Registration Form in PHP</title>
      
      </head>

      <body>
         
       <h2>Login User</h2>
         
       
        <form method="post" action="login.php">
          <?php include('errors.php');?>
           
              <label>Username:</label>
              <input type="text" name="username" >
          
           
              <label>Password:</label>
              <input type="password" name="password" >
         
            <button type="submit" class="btn" name="login_user">Login</button>
          

          <p>
          Not yet Registered? <a href="register.php">Sign Up</a>
          </p>
        </form>
      </body>
</html>