<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Login Page</title>
    <link rel="stylesheet" href="./styles.css" />
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
      <div class="header">
      <?php include 'header.php';?>
      </div>
      <div class="navbar">
        <a class="link" href="home.php">Home</a>
        <a class="link" href="contacts.php">Contacts</a>
      </div>
      <div class="about">
        <a class="link" href="about.php">About</a> 
      </div>

      <div class="leftbar">  
             <h3>LogIn Account</h3> 
         <form action="checklogin.php" class="login-form" method="post">  
          <label for="name" class="label-input">Username</label>   
            <input class="login-input" type="text" placeholder="Enter Username" name="name" required>
            <label for="password" class="label-input">Password</label>          
            <input class="login-input" type="password" name="password" required>
            <button class="form-button" type="submit" name="login">Log In</button>          
            <a class="login-link" href="#">Having trouble logging in?</a>
            <span class="or">or</span>
            <button class="form-button" type="submit">Sign Up</button>          
            </form>       
      </div>
      <div class="sidebar">
      <?php include 'sidebar.php';?>  
      </div>

      <div class="footer">
      <?php include 'footer.php';?>
      </div>
    </div>
    </div>
  </body>
</html>
