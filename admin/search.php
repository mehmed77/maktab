<?php
include("session.php");
if(!isset($_SESSION['loggedIn']) || isset($_SESSION['loggedIn']) && !$_SESSION['loggedIn']) {
    header("location: login.php");
    exit(0);
}
    if(isset($_GET['q'])){
        $q = mysql_real_escape_string($_GET['q']);
    }
    include("connect_db.php");

    $sql = mysql_query("select * from admin WHERE search = md5('".$q."')");
    $nums = mysql_num_rows($sql);
print $nums;
    if($nums > 0){
        $link = mysql_result($sql,0,'link');
        header("location: ".$link);
        exit(0);
    }else{
        print "Hato malumot kiritilgan";
    }
?>
