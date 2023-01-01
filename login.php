<?php include_once 'include/connect.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="./styles.css" />
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
      <div class="header">
        <?php 
        session_start();  
        include 'header.php';?>
      </div>
      <div class="navbar">
        <a class="link" href="home.php">Home</a>
        <a class="link" href="contacts.php">Contacts</a>
      </div>
      <div class="about">
        <a class="link" href="about.php">About</a> 
      </div>

      <div class="leftbar">
      <h3 class="title">Our Users in the database are:</h3>  
      <div class="table-container">
         <table border="1px solid black">
      <tr>
        <th>ID</th>
        <th>Users</th>
      </tr>
      <?php
          $sql = "SELECT * FROM users";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            // output data of each row
while($row = $result->fetch_assoc()) {
  echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td></tr>";
  }
  echo "</table>";
  } else { echo "0 results"; }
  $conn->close();
      ?>
      </div>
   </div>  

      <div class="sidebar">
      <h2 class="title">Welcome</h2>
 <h3><span class="name"> <?php $_SESSION['username']; ?> </span></h3>
      <img src="./images/xia.jpeg" alt="image">   
      </div>

      <div class="footer">
        <?php include 'footer.php';?>
      </div>
    </div>
    </div>   
</body>
</html>

