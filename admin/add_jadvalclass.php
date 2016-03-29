<?php
    include("connect_db.php");
    $id = $_GET['id'];
    for($kun = 1; $kun < 7; $kun++){
        for($soat = 1; $soat <= 7; $soat++){
            $table_id = "timetable_id_".$kun."_".$soat;
            $fan_id = $_POST[$table_id];
            mysql_query("UPDATE `timetable` SET `fan_id`='$fan_id' WHERE `sinf_id` = $id && `kun_id` = $kun && `soat_id` = $soat");
        }
    }
    header("location: jadvalclass.php");
    exit(0);
?>