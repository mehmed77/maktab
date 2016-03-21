<?php
    $link = "oquvchi";
    require ("header.php");
    require ("connect_db.php");
    require("Menu.php");
    require("Count.php");

    $left_menu = new Menu();
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
        $id = $_GET['id'];
        $cnt = new Count();
        $cnt->CourseCount($id);
    }else{
        header("location: course.php");
        exit(0);
    }
    $sql  = mysql_query("SELECT * FROM `course` WHERE `courseId` = $id");
    if($rows = mysql_fetch_array($sql)){
        $CourseName  = $rows['courseName'];
        $CourseCount = $rows['courseCount'];
    }else{
        $CourseName = "";
    }

?>
<div class="menu-header">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;"><?php print $CourseName;?></span>
</div>
<br>
<div class="col-xs-12">
    <div class="col-xs-9">
         <div class="panel panel-primary">
             <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <caption><b style="text-transform: uppercase;">To'garak &nbsp;&nbsp; a`zolari &nbsp;&nbsp; ro'yxati</b></caption>
                        <tr class="text-center">
                            <td class="col-xs-1">N</td>
                            <td class="col-xs-10">F.I.SH</td>
                            <td class="col-xs-1">Sinf</td>
                        </tr>
                        <?php
                        $sql_text = mysql_query("SELECT * FROM `courseusers` WHERE `courseId` = $id");
                            $nums = mysql_num_rows($sql_text);
                            $count = 0;
                            for($i = 0; $i < $nums; $i++){
                                $count++;
                                $userName = mysql_result($sql_text,$i,'userName');
                                $userSinf = mysql_result($sql_text,$i,'userSinf');
                                print "<tr>
                                            <td class='text-center'>$count</td>
                                            <td style='padding-left: 25px;'>$userName</td>
                                            <td class='text-center'>$userSinf</td>
                                        </tr>";
                            }
                        ?>
                    </table>
             </div>
             <div class="panel-footer">
                   <b> O'qilgan: &nbsp; <?php print $CourseCount; ?></b>
             </div>
         </div>
    </div>
    <div class="col-xs-3">
        <?php $left_menu->Courses(); ?>
    </div>
</div>