<?php
    $link = "oquvchi";
    require ("header.php");
    require ("connect_db.php");
    require("Menu.php");
    $left_menu = new Menu();
?>

<div class="menu-header">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">to'garaklar haqida ma'lumot</span>
</div>
<br>

<div class="col-xs-12">
    <div class="col-xs-9">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Mavjud To'garaklar
            </div>
            <div class="panel-body" style="background: mintcream">
                <?php
                    $sql  = mysql_query("SELECT * FROM `course` ORDER BY `course`.`courseId` ASC");
                    $nums = mysql_num_rows($sql);
                    for($i = 0; $i < $nums; $i++){
                        $courseId      = mysql_result($sql,$i,'courseId');
                        $courseName    = mysql_result($sql,$i,'courseName');
                        $courseImg     = mysql_result($sql,$i,'courseImg');
                        $courseDay     = mysql_result($sql,$i,'courseDay');
                        $courseTime    = mysql_result($sql,$i,'courseTime');
                        $courseTeacher = mysql_result($sql,$i,'courseTeacher');
                        $courseCount   = mysql_result($sql,$i,'courseCount');
                ?>
<!--                        images/courseImg/-->
                <div class="news_1">
                    <div class="pull-left" style=" width: 130px; height: 140px;">
                        <img class="img-thumbnail" src="<?php print $courseImg; ?>" width="100%" height="100%">
                    </div>
                    <div style="margin-left: 140px; max-height: 100px;">
                        <table class="table">
                            <tr>
                                <th class="col-xs-4">To'garak nomi</th>
                                <td><?php print $courseName; ?></td>
                            </tr>
                            <tr>
                                <th>To'garakning ish vaqti:</th>
                                <td><?php print $courseDay; ?></td>
                            </tr>
                            <tr>
                                <th>Soat</th>
                                <td><?php print $courseTime; ?></td>
                            </tr>
                            <tr>
                                <th>To'garak rahbari:</th>
                                <td><?php print $courseTeacher; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div style="margin-top: 30px;" class="pull-right">
                        <div class="news-form">
                            <b style="font-size: 16px;">O'qilgan:</b>
                            <b style="color: #000; margin-left: 5px; font-size: larger"><?php print $courseCount; ?></b>
                        </div>
                        &nbsp;
                        <a style="color: white" href="courseUsers.php?id=<?php print $courseId; ?>">
                            <div class="btn btn-info btn-sm">
                                Batafsil
                            </div>
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="col-xs-3">
        <?php
          $left_menu->Oquvchi();
        ?>
    </div>
</div>
<?php
require("footer.php");
?>