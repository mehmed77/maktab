<?php
require ("header.php");
require ("connect_db.php");
require ("Menu.php");
require ("Count.php");
$left_menu = new Menu();
?>
<script>
    function addVideoLike(id){
        location.href = 'Count.php?video_id='+id;
    }
</script>
<div class="menu-header">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">Video Darsliklar</span>
</div>
<br>
<div class="col-xs-12">
    <div class="col-xs-9">
        <?php
            $sql = mysql_query("SELECT * FROM video_darslik ORDER by id DESC");
            $res = mysql_num_rows($sql);
            for ($i = 0; $i < $res; $i++) {
                $video_id     = mysql_result($sql,$i,'id');
                $video_name   = mysql_result($sql,$i,'name');
                $video_short  = mysql_result($sql,$i,'short');
                $video_link   = mysql_result($sql,$i,'link');
                $video_date   = mysql_result($sql,$i,'date');
                $video_date   = date("d.m.Y",$video_date);
                $video_img    = mysql_result($sql,$i,'img_link');
                $video_read   = mysql_result($sql,$i,'reading');
                $video_like   = mysql_result($sql,$i,'LikeCount');
                $video_author = mysql_result($sql,$i,'author');
        ?>

        <div style="width: 100%; padding: 0; margin-bottom: 10px;">
            <br>
            <table id="table-mojiza" class="table table-bordered" width="100%">
                <tr>
                    <td colspan="2">
                        <table width="100%">
                            <tr>
                                <td width="90%"><b style="float: left; left: 0px;"><?php print $video_name; ?></b></td>
                                <td>
                                    <button onclick="addVideoLike(<?php print $video_id; ?>)" class="btn btn-default pull-right h3">
                                        <span class="text-primary glyphicon glyphicon-thumbs-up"></span>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width="155" height="155">
                        <img width="100%" height="100%" src="<?php print URL.''.$video_img; ?>">
                    </td>
                    <td style="text-align: justify;">
                        <?php print $video_short; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-user"></span>
                                    <?php
                                    if($video_author == "" || $video_author == null){
                                        print "Administrator";
                                    }else{
                                        print $video_author;
                                    };
                                    ?>
                                </td>
                                <td width="130">
                                    <span class="glyphicon glyphicon-time"></span>
                                    <?php print $video_date; ?>
                                </td>
                                <td width="60">
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                    <?php print $video_read; ?>
                                </td>
                                <td width="70">
                                    <span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;
														<span id="LikeCount">
															<span><?php echo $video_like; ?></span>
														</span>
                                </td>
                                <td width="70">
                                    <a href="video.php?id=<?php print $video_id; ?>">
                                        <button class="pull-right btn btn-primary btn-sm text-justify"> &nbsp; Batafsil &nbsp; </button>
                                    </a>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
        </div>
        <?php } ?>
     </div>
    <div class="col-xs-3">
        <?php
        $left_menu->HikmatliSozlar();
        $left_menu->AsosoiyLeftMenu();
        $left_menu->CurrentYearName();
        $left_menu->FoydaliManbalar();
        $left_menu->Mojizalar();
        ?>
    </div>
</div>
<?php
include "footer.php";
?>