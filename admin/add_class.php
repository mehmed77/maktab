<?php
    include("session.php");
    if(!isset($_SESSION['loggedIn']) || isset($_SESSION['loggedIn']) && !$_SESSION['loggedIn']) {
        header("location: login.php");
        exit(0);
    }
    include("connect_db.php");
    $sinf = $_POST['addsinf'];
    mysql_query("INSERT INTO `sinflar`(`id`, `sinf`) VALUES (NULL,'$sinf')");
    $id = mysql_insert_id();
//    print $id;
    for($kun = 1; $kun <= 6; $kun++){
        for($soat = 1; $soat <= 7; $soat++){
            mysql_query("INSERT INTO `timetable`(`id`, `kun_id`, `sinf_id`, `soat_id`, `fan_id`) VALUES (NULL,$kun,$id,$soat,0)");
        }
    }
 header("location: addclass.php");
exit(0);
?>