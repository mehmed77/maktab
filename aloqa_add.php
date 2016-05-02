<?php
/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 18.04.2016
 * Time: 14:42
 */
include("connect_db.php");
    $fish  = mysql_real_escape_string($_POST['fish']);
    $email = mysql_real_escape_string($_POST['email']);
    $mavzu = mysql_real_escape_string($_POST['mavzu']);
    $xabar = mysql_real_escape_string($_POST['xabar']);

    if($fish != "" && $email != "" && $mavzu != "" && $xabar != "") {
        mysql_query("INSERT INTO `maktab`.`aloqa` (`id`, `fish`, `email`, `mavzu`, `xabar`, `ip`, `deleted`) VALUES 
                    (NULL, '".$fish."', '".$email."', '".$mavzu."', '".$xabar."', '".$_SERVER['REMOTE_ADDR']."', '0');");
        header("location: aloqa.php?res=ok");
        exit(-1);
    }else{
        header("location: aloqa.php?res=error");
        exit(-1);
    }
?>