<?php
    $host = "localhost";
    $username = "root";
    $pasw = "";
    $dbname = "login";

    $conn = mysqli_connect($host,$username,$pasw,$dbname);
    if(mysqli_connect_error())
{
    echo "Cannot connect";
}
?>