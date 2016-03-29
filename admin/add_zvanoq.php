<?php
include("connect_db.php");
   for($i = 1; $i <= 14; $i++){
       $kirish  = "first_".$i;
       $chiqish = "second_".$i;
       $kir     = $_POST[$kirish];
       $chiq    = $_POST[$chiqish];
       mysql_query("UPDATE `maktab`.`zvanok` SET `kirish` = '$kir', `chiqish` = '$chiq' WHERE `zvanok`.`id` = $i");
   }
   header("location: addzvanoq.php");
 exit(0);
?>