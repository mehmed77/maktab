<?php
$link = "oquvchi";
include "connect_db.php";
include("header.php");
include("Menu.php");
$left_menu = new Menu();
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<div class="menu-header">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">Ixtiro va kashfiyotlar</span>
</div>
<br>
<div class="col-xs-12">
    <div class="col-xs-9">
        <div class="panel panel-body panel-primary">
            <?php
                $sql = mysql_query("SELECT * FROM `ixtiro` ORDER BY `id` ASC");
                $nums = mysql_num_rows($sql);
                for($i = 0; $i < $nums; $i++){
                    $IxtroId    = mysql_result($sql,$i,'id');
                    $IxtroMavzu = mysql_result($sql,$i,'mavzu');
                    $IxtroShort = mysql_result($sql,$i,'short');
                    $IxtroImg   = mysql_result($sql,$i,'imglink');
                    $IxtroCount = mysql_result($sql,$i,'tahrir');
            ?>
            <div class="news_2">
                <div class="pull-left" style=" width: 130px; height: 140px;">
                    <img class="img-thumbnail" src="<?php print $IxtroImg;?>" width="100%" height="100%">
                </div>
                <div style="margin-left: 140px; max-height: 100px;">
                    <b><?php print $IxtroMavzu; ?></b><br>
                    <p><?php print $IxtroShort; ?></p>
                </div>
                <div style="margin-top: 30px;" class="pull-right">
                    <div class="news-form">
                        <b style="font-size: 16px;">O'qilgan:</b>
                        <b style="color: #000; margin-left: 5px; font-size: larger"><?php print $IxtroCount; ?></b>
                    </div>
                    &nbsp;
                    <a style="color: white" href="discoveries.php?id=<?php print $IxtroId; ?>">
                        <div class="btn btn-info btn-sm">
                            Batafsil
                        </div>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="col-xs-3">
        <?php
          $left_menu->Oquvchi();
        ?>
    </div>
</div>