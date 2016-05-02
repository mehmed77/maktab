<?php
$link = "oquvchi";
require("header.php");
require("connect_db.php");
require("Menu.php");
$left_menu = new Menu();

$sql = mysql_query("SELECT * FROM `iqtidorli` ORDER BY `id` DESC ");
$nums = mysql_num_rows($sql);
?>
<div class="menu-header">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">Iqtidorli o'quvchilar</span>
</div>
<br>
<div class="col-xs-12">
    <div class="col-xs-9">
        <?php
        for ($i = 0; $i < $nums; $i++) {
            $id = mysql_result($sql, $i, 'id');
            $fio = mysql_result($sql, $i, 'fio');
            $more = mysql_result($sql, $i, 'more');
            $photo = mysql_result($sql, $i, 'photo');
            ?>
            <div class="panel panel-body panel-primary">
                <div class="col-xs-4">
                    <img class="img-thumbnail" src="<?php echo $photo; ?>" style="width: 270px">
                </div>
                <div class="col-xs-8">
                    <p class="h1 text-center"><b><?php echo $fio; ?></b></p>
                    <p style="text-align: justify; font-size: larger"><?php echo $more; ?></p>
                </div>
            </div>

        <?php } ?>

    </div>
    <div class="col-xs-3">
        <?php
        $left_menu->Oquvchi();
        ?>
    </div>
</div>
<?php include("footer.php"); ?>
