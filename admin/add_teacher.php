<?php
include("session.php");
if(!isset($_SESSION['loggedIn']) || isset($_SESSION['loggedIn']) && !$_SESSION['loggedIn']) {
    header("location: login.php");
    exit(0);
}
?>
<?php
include("connect_db.php");
    $fname      = mysql_real_escape_string($_POST['fname']);
    $lname      = mysql_real_escape_string($_POST['lname']);
    $mname      = mysql_real_escape_string($_POST['mname']);
    $mutaxasis  = mysql_real_escape_string($_POST['mutaxasis']);
    $bdate      = mysql_real_escape_string($_POST['bdate']);
    $tugjoyi    = mysql_real_escape_string($_POST['tugjoyi']);
    $tamomlagan = mysql_real_escape_string($_POST['tamomlagan']);
    $malumoti   = mysql_real_escape_string($_POST['malumoti']);
    $toifasi    = mysql_real_escape_string($_POST['toifasi']);

    $sql = "INSERT INTO `maktab`.`teacher` (
               `Id`,
               `FName`,
               `LName`,
               `MName`,
               `BDate`,
               `Toifa`,
               `TugManzil`,
               `Tugatgan`,
               `DipMutaxasisligi`,
               `Malumoti`
           ) VALUES (
               NULL,
               '$fname',
               '$lname',
               '$mname',
               '$bdate',
               '$toifasi',
               '$tugjoyi',
               '$tamomlagan',
               '$mutaxasis',
               '$malumoti');";
    mysql_query($sql);
    header("location: addteacher.php");
    exit(0);
?>