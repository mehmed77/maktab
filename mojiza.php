<?php
$link="home";
require "connect_db.php";
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
    $sql = mysql_query("select * from `miracle` where id = $id");
    if($rows = mysql_fetch_assoc($sql)){
        include("mojiza_one.php");
        exit(-1);
    }else{
        header("location: mojiza.php");
    }
}
include "header.php";
require "Menu.php";
require"Count.php";
$left_menu = new Menu();
?>
<style>
    #table-mojiza{
        background: rgba(244, 255, 245, 0.12);
        font-size: 14px;
        box-shadow: inset 0px 0px 1px 5px #f8f9ff, inset 0px 0px 0px 0px #ffffff, 0px 0px 2px 2px #f2f8ff;
        border-radius: 0px 0px 5px 5px;
    }
</style>
<script>
    function addMojizaLike(id){
        location.href = 'Count.php?mojiza_id='+id;
    }
</script>
<div class="menu-header">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">QADIMGI DUNYONING YETTI MO'JIZASI</span>
</div>
<br>
<div class="col-xs-12">
    <div class="col-xs-9">
        <?php
        $sql = mysql_query("SELECT * FROM mojiza ORDER BY id");
        $rows = mysql_num_rows($sql);
        for($i = 0; $i < $rows; $i++){
            $miraId      = mysql_result($sql,$i,'id');
            $miraMavzu   = mysql_result($sql,$i,'mavzu');
            $miraImgLink = mysql_result($sql,$i,'img_link');
            $miraShort   = mysql_result($sql,$i,'short_miracle');
            $miraRead    = mysql_result($sql,$i,'reading');
            $miraLike    = mysql_result($sql,$i,'LikeCount');
            $miraAuthor   = mysql_result($sql,$i,'author');
            $miraDate    = mysql_result($sql,$i,'date');
            $miraDate    = date("d.m.Y",$miraDate);
            ?>

            <div style="width: 100%; padding: 0; margin-bottom: 10px;">
                <br>
                <table id="table-mojiza" class="table table-bordered" width="100%">
                    <tr>
                        <td colspan="2">
                            <table width="100%">
                                <tr>
                                    <td width="90%"><b style="float: left; left: 0px;"><?php print $miraMavzu; ?></b></td>
                                    <td>
                                        <button onclick="addMojizaLike(<?php print $miraId; ?>)" class="btn btn-default pull-right h3">
                                            <span class="text-primary glyphicon glyphicon-thumbs-up"></span>
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="155" height="155">
                            <img width="100%" height="100%" src="<?php print $miraImgLink; ?>">
                        </td>
                        <td style="text-align: justify;">
                            <?php print $miraShort; ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user"></span>
                                        <?php
                                        if($miraAuthor == "" || $miraAuthor == null){
                                            print "Administrator";
                                        }else{
                                            print $miraAuthor;
                                        };
                                        ?>
                                    </td>
                                    <td width="130">
                                        <span class="glyphicon glyphicon-time"></span>
                                        <?php print $miraDate; ?>
                                    </td>
                                    <td width="60">
                                        <span class="glyphicon glyphicon-eye-open"></span>
                                        <?php print $miraRead; ?>
                                    </td>
                                    <td width="70">
                                        <span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;
														<span id="LikeCount">
															<span><?php echo $miraLike; ?></span>
														</span>
                                    </td>
                                    <td width="70">
                                        <a href="mojiza.php?id=<?php print $miraId; ?>">
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
    <!-- RIGHT  MENU -->
    <div class="col-xs-3">
                <?php
                $left_menu->HikmatliSozlar();
                ?>
        <div style="width: 100%; text-align: center; padding-bottom: 10px;">
            <img src="images/2016-yil.jpg">
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading text-center" style="line-height: 7px;">
                <b style="text-transform: uppercase;">Foydali manbalar</b>
            </div>
            <div class="panel-body">
                <ul class="style2">
                    <li class="first">
                        <table>
                            <tr>
                                <td>
                                    <img src="images/matbuot.gif">
                                </td>
                                <td style="padding-left: 3px; font-size: small;">
                                    <a href="http://www.press-service.uz">O'ZBEKISTON RESPUBLIKASI PREZIDENT MATBUOT XIZMATI</a>
                                </td>
                            </tr>
                        </table>
                    </li>
                    <li>
                        <table>
                            <tr>
                                <td>
                                    <img src="images/gerb.gif">
                                </td>
                                <td style="padding-left: 3px; font-size: small;">
                                    <a href="http://www.gov.uz">O'ZBEKISTON RESPUBLIKASI HUKUMAT PORTOLI</a>
                                </td>
                            </tr>
                        </table>
                    </li>
                    <li>
                        <table>
                            <tr>
                                <td>
                                    <img src="images/senat.jpg">
                                </td>
                                <td style="padding-left: 3px; font-size: small;">
                                    <a href="http://www.parliament.gov.uz">O'ZBEKISTON RESPUBLIKASI OLIY MAJLISI</a>
                                </td>
                            </tr>
                        </table>
                    </li>
                    <li>
                        <table>
                            <tr>
                                <td>
                                    <img src="images/gerb.gif">
                                </td>
                                <td style="padding-left: 3px; font-size: small;">
                                    <a href="http://www.uzedu.uz">O'ZBEKISTON RESPUBLIKASI XALQ TA'LIMI VAZIRLIGI</a>
                                </td>
                            </tr>
                        </table>
                    </li>
                </ul>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading" style="line-height: 7px; text-align: center">
                <b style="text-transform: uppercase;">Dunyo Mo'jizalari</b>
            </div>
            <div class="panel-body">
                <a href="mojiza.php">
                    <img src="<?php print URL_IMG;?>mojiza.gif" width="100%">
                </a>
            </div>
        </div>
        <!-- RIGHT  MENU END -->
    </div>
</div>
<?php
include("footer.php");
?>