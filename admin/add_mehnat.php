<?php
include("session.php");
if(!isset($_SESSION['loggedIn']) || isset($_SESSION['loggedIn']) && !$_SESSION['loggedIn']) {
    header("location: login.php");
    exit(0);
}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
   include("connect_db.php");
    $id  = $_GET['id'];
    $son = $_GET['son'];

   for($i = 1; $i <= $son; $i++){
       $mehnat = "mehnat_".$i;
       $mehnat_1 = mysql_real_escape_string($_POST[$mehnat]);
       $sql = "INSERT INTO `maktab`.`mehnat` (`TeachId`, `IshJoyi`) VALUES ('$id', '$mehnat_1')";
       mysql_query($sql);
       mysql_free_result($sql);
   }
  header("location: teachers.php");
  exit(0);
?>