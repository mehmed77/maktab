<?php
$link = "oquvchi";
require ("header.php");
require ("connect_db.php");
require("Menu.php");
$left_menu = new Menu();

$sql    = mysql_query("SELECT * FROM `zvanok` WHERE `smena` = 1");
$nums   = mysql_num_rows($sql);
$sql_1  = mysql_query("SELECT * FROM `zvanok` WHERE `smena` = 2");
$nums_1 = mysql_num_rows($sql_1);

?>
<div class="menu-header">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">Qo'ng'iroqlar jadvali</span>
</div>
<br>
<div class="col-xs-12">
    <div class="col-xs-9">
        <div class="panel panel-body panel-primary">
            <div class="col-xs-6">
                <table class="table table-bordered text-center table-striped">
                    <tr>
                        <th colspan="3" class="text-center">Birinchi Smena uchun qo'ng'iroqlar jadvali</th>
                    </tr>
                    <tr>
                        <th class="text-center col-xs-2">Dars</th>
                        <th class="text-center col-xs-5">Kirish</th>
                        <th class="text-center col-xs-5">Chiqish</th>
                    </tr>
                    <?php
                    $count = 0;
                    for($i = 0; $i < $nums; $i++){
                        $count++;
                        $id_1      = mysql_result($sql,$i,'id');
                        $kirish_1  = mysql_result($sql,$i,'kirish');
                        $chiqish_1 = mysql_result($sql,$i,'chiqish');
                        ?>
                        <tr>
                            <td><?php print $count; ?></td>
                            <td><?php print $kirish_1; ?></td>
                            <td><?php print $chiqish_1; ?></td>
                        </tr>
                    <?php } ?>
                </table>
             </div>
            <div class="col-xs-6">
                <table class="table table-bordered text-center table-striped">
                   <tr>
                       <th colspan="3" class="text-center">Ikkinchi Smena uchun qo'ng'iroqlar jadvali</th>
                   </tr>

                    <tr>
                        <th class="text-center col-xs-2">Dars</th>
                        <th class="text-center col-xs-5">Kirish</th>
                        <th class="text-center col-xs-5">Chiqish</th>
                    </tr>
                    <?php
                    $count = 0;
                    for($i = 0; $i < $nums_1; $i++){
                        $count++;
                        $id_1      = mysql_result($sql_1,$i,'id');
                        $kirish_1  = mysql_result($sql_1,$i,'kirish');
                        $chiqish_1 = mysql_result($sql_1,$i,'chiqish');
                        ?>

                        <tr>
                            <td><?php print $count; ?></td>
                            <td><?php print $kirish_1; ?></td>
                            <td><?php print $chiqish_1; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <div class="col-xs-3">
        <?php $left_menu->Oquvchi(); ?>
    </div>
<?php include("footer.php"); ?>