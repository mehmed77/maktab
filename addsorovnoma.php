<?php
// add so'rovnoma
include("connect_db.php");
if(isset($_REQUEST['action']) && $_REQUEST['action'] == "sorovnoma") {
       if (isset($_POST['ovoz'])) {
            $SorovId = $_POST['sorov'];
            $SorovIp = $_SERVER['REMOTE_ADDR'];
            $sql = mysql_query("SELECT `ip_poll`, `totel` FROM `ip_sorovnoma`");
            if($rows = mysql_fetch_assoc($sql)){
                if(!strstr($rows['ip_poll'],"$SorovIp")){
                    mysql_query("UPDATE `ip_sorovnoma` SET `ip_poll`= CONCAT(`ip_poll`, ':','$SorovIp', ':'),`totel`= `totel` + 1");
                    mysql_query("UPDATE `sorovnoma` SET `votes`= `votes` + 1 WHERE `id` = $SorovId");
                }
            }
            header("location: index.php?s=1");
            exit(0);
       } elseif (isset($_POST['result'])) {
           header("location: index.php?s=1");
           exit(0);
       }
   }
?>