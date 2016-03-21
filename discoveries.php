<?php
$id = null;
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
}else{
    header("location: kashfiyotlat.php");
    exit(0);
}
    $link = "oquvchi";
    include("connect_db.php");
    include("header.php");
    include("Count.php");
    include("Menu.php");
    $count = new Count();
    $count->IxtroCount($id);
    $left_menu = new Menu();
    $sql = mysql_query("select * from ixtiro WHERE `id` = $id");
    if($rows = mysql_fetch_assoc($sql)){
        $IXTRO_MAVZU   = $rows['mavzu'];
        $IXTRO_IZOH    = $rows['izoh'];
        $IXTRO_LINK    = $rows['imglink'];
        $IXTRO_TAHRIR  = $rows['tahrir'];
    }
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
            <div style="padding-top: 3px; text-transform: uppercase; text-align: center; font-size: large; min-height: 30px; border-bottom: 1px dashed black">
                <b><?php print $IXTRO_MAVZU; ?></b>
            </div>
            <div style="margin-top: 3px;">
                   <img src="<?php print $IXTRO_LINK;?>" class="img-thumbnail pull-left">
               <div style="text-align: justify;"> <?php print $IXTRO_IZOH; ?></div>
            </div>
            <div style="padding-top: 3px; text-transform: uppercase; text-align: center; font-size: large; min-height: 30px; border-top: 1px dashed black">
                <b>O'qilgan: <?php print $IXTRO_TAHRIR; ?></b>
            </div>
        </div>
    </div>
    <div class="col-xs-3">
        <?php
            $left_menu->Oquvchi();
            $left_menu->Ixtrolar();
        ?>
    </div>
</div>
