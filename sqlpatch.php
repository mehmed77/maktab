<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
    //include("connect_db.php");
    $host = "localhost";
    $user = "root";
    $pass = "muhammad";
    $dbname = "maktab";
    mysql_connect("$host","$user","$pass") or die("Mysql not connect");
    mysql_select_db("$dbname") or die("Database not connect");
//    mysql_set_charset('utf8');
    $nums = mysql_query("SELECT * FROM `iqtidorli`");
   $rows = mysql_num_rows($nums);
for ($i = 0; $i < $rows; $i++) {
    $id = mysql_result($nums, $i, 'id');
    $fio = mysql_result($nums, $i, 'fio');
    $short_news = mysql_result($nums, $i, 'more');

    mysql_set_charset('utf8');
    $sql = "UPDATE `iqtidorli` SET `fio`='$fio',`more`='$short_news' WHERE `id` = $id";
    print $sql."<br/>";
    mysql_query($sql);
}
?>