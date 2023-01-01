<?php
    session_start();
    include 'C:\xampp\htdocs\Login\include\connect.php';
    if (isset($_POST['login'])) {
        $username = $_POST['name'];
        $password = $_POST['password'];
        $query = $conn->prepare("SELECT * FROM users WHERE name= ? ");

        mysqli_stmt_bind_param($query, "s", $username);
        $query->execute();

      $result = mysqli_stmt_get_result($query);
      $row =  mysqli_fetch_assoc($result);
        if (!$row ) {
            echo '<p class="error">Username password combination is wrong!</p>';
        } else {
            if ($password == $row['password']) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['name'];
                header("Location: login.php?action=login successfully");
                // echo '<p class="success">Congratulations, you are logged in!</p>';
            } else {
                echo '<p class="error">Username password combination is wrong!</p>';
            }
        }
    }
?>