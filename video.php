<?php
/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 03.05.2016
 * Time: 2:29
 */
include "connect_db.php";
include "Count.php";
$count = new Count();
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id   = $_GET['id'];
    $count->VideoCount($id);
    $sql  = mysql_query("SELECT * FROM video_darslik WHERE id = $id");
    $nums = mysql_num_rows($sql);
    if($nums > 0) {
    }else{
        header("location: videos.php");
        exit(0);
    }
}else{
    header("location: videos.php");
    exit(0);
}
?>
<!-- Asosiy sahifa boshlandi -->
<?php
    include "header.php";
    require "Menu.php";
    $left_menu = new Menu();
    date_default_timezone_set("Asia/Tashkent");
    $video_name = mysql_result($sql,0,'name');
    $video_link = mysql_result($sql,0,'link');
    $video_read = mysql_result($sql,0,'reading');
    $video_down = mysql_result($sql,0,'download');
    $video_size = mysql_result($sql,0,'size');
?>

<div class="menu-header">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">Video Darsliklar</span>
</div>
<br>
<div class="col-xs-12">
    <div class="col-xs-9">
        <div class="panel panel-success">
            <div class="panel-heading">
                <?php print $video_name; ?>
            </div>
            <div class="panel-body text-center" >
                <?php print $video_link; ?> <br>
                <a style="text-decoration: inherit" href="<?php print $video_down; ?>">
                    <img src="<?php print URL_IMG; ?>video/video-download.jpg" width="25px;"> Yuklab Oling
                </a> &nbsp;
                <?php print $video_size; ?>
            </div>
            <div class="panel-footer text-center">
                Ko'rishlar: <?php print $video_read; ?>
            </div>
        </div>
    </div>
    <div class="col-xs-3">
        <?php
            $left_menu->AsosoiyLeftMenu();
        ?>
    </div>
</div>