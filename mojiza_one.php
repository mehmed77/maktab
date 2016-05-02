<?php
include "header.php";
require "Menu.php";
require "Count.php";
$left_menu = new Menu();
$count = new Count();
$count->MojizaCount($id);
?>
<div class="menu-header">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">QADIMGI DUNYONING YETTI MO'JIZASI</span>
</div>
<br>
<div class="col-xs-12">
    <div class="col-xs-9">
        <?php
            $miraId      = $rows['id'];
            $miraMavzu   = $rows['mavzu'];
            $miraImgLink = $rows['img_link'];
            $miraShort   = $rows['short_miracle'];
            $miraLong    = $rows['long_miracle'];
            $miraRead    = $rows['reading'];
            $miraLike    = $rows['LikeCount'];
            $miraAuthor  = $rows['author'];
            $miraDate    = $rows['date'];
            $miraDate    = date("d.m.Y",$miraDate);
        ?>
            <div class="panel panel-body panel-primary">
                <div style="padding-top: 3px; text-transform: uppercase; text-align: center; font-size: large; min-height: 30px; border-bottom: 1px dashed black">
                    <b><?php print $miraMavzu; ?></b>
                </div>
                <div style="margin-top: 3px;">
                    <img src="<?php print URL_IMG.'miracle/'.$miraImgLink;?>" class="pull-left" style="padding: 15px;">
                    <div style="text-align: justify;"> <?php print $miraLong; ?></div>
                </div>
                <div style="padding-top: 3px; text-transform: uppercase; text-align: center; font-size: large; min-height: 30px; border-top: 1px dashed black">
                    <b>O'qilgan: <?php print $miraRead; ?></b>
                </div>
            </div>
    </div>
    <div class="col-xs-3">
        <?php
        $sql = mysql_query("SELECT * FROM miracle ORDER BY id");
        $row = mysql_num_rows($sql);
        for($i = 0; $i < $row; $i++){
        $mira_Id      = mysql_result($sql,$i,'id');
        $mira_Mavzu   = mysql_result($sql,$i,'mavzu');
        $mira_ImgLink = mysql_result($sql,$i,'img_link');
        ?>
       <div style="margin-bottom: 15px; padding-top: 5px;">
            <a href="<?php print URL.'mojiza.php?id='.$mira_Id; ?>">
               <div style="border: 1px solid #005580; min-height:56px;  border-radius: 5px;">
                    <img  class="pull-left" src="<?php print URL_IMG.'miracle/'.$mira_ImgLink;?>" style="width: 60px; height: 45px; margin: 5px; border-radius: 6px;">
                   <b style="text-align: center; padding-left: 10px;">
                       <?php print $mira_Mavzu; ?>
                   </b>
               </div>
            </a>
        </div>
        <?php } ?>
    </div>
</div>
