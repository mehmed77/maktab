<?php
    $host = "localhost";
    $user = "root";
    $pass = "muhammad";
    $dbname = "maktab";
    mysql_connect("$host","$user","$pass") or die("Mysql not connect");
    mysql_select_db("$dbname") or die("Database not connect");
?>