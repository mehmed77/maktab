<?php
$link="maktab";
require "header.php";
require "connect_db.php";
require "Menu.php";
$left_menu = new Menu();
?>


<div class="menu-header">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">Maktab Pasporti</span>
</div>
<br>
<div class="col-xs-12">
    <div class="col-xs-9">
        <img src="images/pasport/001.JPG" width="100%"><br>
        <img src="images/pasport/002.JPG" width="100%"><br>
        <img src="images/pasport/003.JPG" width="100%"><br>
        <img src="images/pasport/004.JPG" width="100%"><br>
        <img src="images/pasport/005.JPG" width="100%"><br>
        <img src="images/pasport/006.JPG" width="100%"><br>
        <img src="images/pasport/007.JPG" width="100%"><br>
        <img src="images/pasport/008.JPG" width="100%"><br>
    </div>
    <div class="col-xs-3">
         <?php $left_menu->MaktabVaTalim(); ?>
    </div>
</div>
<?php
require("footer.php");
?>