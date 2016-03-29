<?php
include("session.php");
if(!isset($_SESSION['loggedIn']) || isset($_SESSION['loggedIn']) && !$_SESSION['loggedIn']) {
    header("location: login.php");
    exit(0);
}
    include("connect_db.php");
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
        $id = $_GET['id'];
        $sql = mysql_query("SELECT * FROM `sinflar` WHERE `id` = $id");
        $rows = mysql_fetch_array($sql);
        $SINF_NAME = $rows['sinf'];

    }else{
        header("location: addclass.php");
        exit(0);
    }
    include("style.php");
?>
<div id="banner" style="width: 100%; background: #428bca; font-size: 45px; padding-top: 16px; padding-left: 50px;  border-bottom: 5px double #0078D1; height: 100px;">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;"><?php print $SINF_NAME; ?>. dars jadvalni tashkil qilish</span>
</div>
<br>
<?php
   $sql_fan = mysql_query("SELECT * FROM `fanlar` ORDER BY `fanlar`.`fan_id` ASC");
   $num_fan = mysql_num_rows($sql_fan);
   for($i = 0; $i < $num_fan; $i++){
       $fan_id[$i]   = mysql_result($sql_fan,$i,'fan_id');
       $fan_name[$i] = mysql_result($sql_fan,$i,'fan_name');
   }

   function selectedFan($sinf_id, $kun, $soat){
       $sql_sinf = mysql_query("SELECT * FROM `timetable` WHERE `sinf_id` = $sinf_id && `kun_id` = $kun && `soat_id` = $soat");
       if($rows = mysql_fetch_assoc($sql_sinf)){
           return $rows['fan_id'];
       }else{
           return 0;
       }
   }
?>
<form action="add_jadvalclass.php?id=<?php print $id; ?>" method="post">
    <div class="col-xs-12">
        <div class="col-xs-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Dushanba
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped text-center">
                        <?php
                           for($soat = 1; $soat <= 7; $soat++){
                               $day = "timetable_id_1_".$soat;
                               $select_fan_id = selectedFan($id, 1, $soat);
                        ?>
                            <tr>
                                <td class="col-xs-2"><?php print $soat; ?></td>
                                <td class=" col-xs-10">
                                    <select class="form-control" name="<?php print $day; ?>">
                                        <?php
                                           for($i = 0; $i < $num_fan; $i++){
                                               $selected = ($fan_id[$i]  == $select_fan_id)?"selected":"";
                                               print "<option value='$fan_id[$i]' $selected>$fan_name[$i]</option>";
                                           }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Seshanba
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped text-center">
                        <?php
                        for($soat = 1; $soat <= 7; $soat++){
                            $day = "timetable_id_2_".$soat;
                            $select_fan_id = selectedFan($id, 2, $soat);
                            ?>
                            <tr>
                                <td class="col-xs-2"><?php print $soat; ?></td>
                                <td class=" col-xs-10">
                                    <select class="form-control" name="<?php print $day; ?>">
                                        <?php
                                        for($i = 0; $i < $num_fan; $i++){
                                            $selected = ($fan_id[$i]  == $select_fan_id)?"selected":"";
                                            print "<option value='$fan_id[$i]' $selected>$fan_name[$i]</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Chorshanba
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped text-center">
                        <?php
                        for($soat = 1; $soat <= 7; $soat++){
                            $day = "timetable_id_3_".$soat;
                            $select_fan_id = selectedFan($id, 3, $soat);
                            ?>
                            <tr>
                                <td class="col-xs-2"><?php print $soat; ?></td>
                                <td class=" col-xs-10">
                                    <select class="form-control" name="<?php print $day; ?>">
                                        <?php
                                        for($i = 0; $i < $num_fan; $i++){
                                            $selected = ($fan_id[$i]  == $select_fan_id)?"selected":"";
                                            print "<option value='$fan_id[$i]' $selected>$fan_name[$i]</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Payshanba
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped text-center">
                        <?php
                        for($soat = 1; $soat <= 7; $soat++){
                            $day = "timetable_id_4_".$soat;
                            $select_fan_id = selectedFan($id, 4, $soat);
                            ?>
                            <tr>
                                <td class="col-xs-2"><?php print $soat; ?></td>
                                <td class=" col-xs-10">
                                    <select class="form-control" name="<?php print $day; ?>">
                                        <?php
                                        for($i = 0; $i < $num_fan; $i++){
                                            $selected = ($fan_id[$i]  == $select_fan_id)?"selected":"";
                                            print "<option value='$fan_id[$i]' $selected>$fan_name[$i]</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Juma
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped text-center">
                        <?php
                        for($soat = 1; $soat <= 7; $soat++){
                            $day = "timetable_id_5_".$soat;
                            $select_fan_id = selectedFan($id, 5, $soat);
                            ?>
                            <tr>
                                <td class="col-xs-2"><?php print $soat; ?></td>
                                <td class=" col-xs-10">
                                    <select class="form-control" name="<?php print $day; ?>">
                                        <?php
                                        for($i = 0; $i < $num_fan; $i++){
                                            $selected = ($fan_id[$i]  == $select_fan_id)?"selected":"";
                                            print "<option value='$fan_id[$i]' $selected>$fan_name[$i]</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Shanba
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped text-center">
                        <?php
                        for($soat = 1; $soat <= 7; $soat++){
                            $day = "timetable_id_6_".$soat;
                            $select_fan_id = selectedFan($id, 6, $soat);
                            ?>
                            <tr>
                                <td class="col-xs-2"><?php print $soat; ?></td>
                                <td class=" col-xs-10">
                                    <select class="form-control" name="<?php print $day; ?>">
                                        <?php
                                        for($i = 0; $i < $num_fan; $i++){
                                            $selected = ($fan_id[$i]  == $select_fan_id)?"selected":"";
                                            print "<option value='$fan_id[$i]' $selected>$fan_name[$i]</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-12">
            <div class="panel panel-body panel-primary">
                <button class="center-block btn btn-primary" type="submit">Tasdiqlash</button>
            </div>
        </div>
    </div>
</form>
