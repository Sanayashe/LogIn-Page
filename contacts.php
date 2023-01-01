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
        <div class="leftbar-content">       
         <h1>Get In Touch</h1>  
         <h3 class="space">sanayashe@gmail.com</h3>
         <h3 class="text">+9779861388248</h3>
      </div>
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
