<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="./styles.css" />
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
      <div class="header">
        <?php include 'header.php';?>
      </div>
      <div class="navbar">
        <a class="link" href="/home.html">Home</a>
        <a class="link" href=/contacts.html>Contacts</a>
      </div>
      <div class="about">
        <a class="link" href="/about.html">About</a> 
      </div>

      <div class="leftbar">          
         <h3 class="title">Our Users in the database are:</h3>
         <table class="table-style"  border="1px solid black" border-collapse= "collapse">
      <tr>
        <th>ID</th>
        <th>Username</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Natsu Dragneel</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Erza Scarlet</td>
      </tr>
     </table >
      </div>
      <div class="sidebar">
      <h2 class="title">Welcome</h2>
      <?php echo <h3><span class="name"> $_POST["name"]; </span></h3>?>
      <img src="./images/xia.jpeg" alt="image">";     
      </div>

      <div class="footer">
        <?php include 'footer.php';?>
      </div>
    </div>
    </div>   
</body>
</html>

