<?php
include("session.php");
if(!isset($_SESSION['loggedIn']) || isset($_SESSION['loggedIn']) && !$_SESSION['loggedIn']) {
    header("location: login.php");
    exit(0);
}
   if(isset($_GET['id'])){
    $id_ = $_GET['id'];
   }
   if(isset($_GET['son'])){
       $son = $_GET['son'];
   }else{
       $son = 1;
   }
   include("style.php");
?>

<div id="banner" style="width: 100%; background: #428bca; font-size: 45px; padding-top: 16px; padding-left: 50px;  border-bottom: 5px double #0078D1; height: 100px;">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">Mexnat Faoliyatini qo'shish</span>
</div>
<br>
<form action="add_mehnat.php?id=<?php print $id_;?>&son=<?php print $son;?>" method="post">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Mexnat Faoliyatii
            </div>
            <div class="panel-body">
                <?php
                  for($i = 1; $i<= $son; $i++){
                      $mehnat = "mehnat_".$i;
                      print"<textarea name='".$mehnat."' class='form-control' value=''></textarea><br>";
                  }
                ?>
            </div>
            <div class="panel-footer">
                <button class="btn btn-primary center-block" type="submit">Add Mehnat</button>
            </div>
        </div>
    </div>
</form>
