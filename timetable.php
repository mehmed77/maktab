<?php
$link = "oquvchi";
require ("header.php");
require ("connect_db.php");
require("Menu.php");
$left_menu = new Menu();

$sql    = mysql_query("SELECT * FROM `zvanok` WHERE `smena` = 1");
$nums   = mysql_num_rows($sql);
$sql_1  = mysql_query("SELECT * FROM `zvanok` WHERE `smena` = 2");
$nums_1 = mysql_num_rows($sql_1);

// fanni topish funksiyasi
function FanNameFunc($sinf_id, $kun, $soat){
    $sql_sinf = mysql_query("SELECT f.fan_name FROM `timetable` as t
                             INNER JOIN fanlar as f on f.fan_id = t.fan_id
                             WHERE t.`sinf_id` = $sinf_id && t.`kun_id` = $kun && t.`soat_id` = $soat");
    if($rows = mysql_fetch_assoc($sql_sinf)){
        $FAN = $rows['fan_name'];
        return $FAN=="- - - - - - - - - -"?"":$FAN;
//        return $FAN;
    }else{
        return "";
    }
}


?>
    <div class="menu-header">
        <span class="text-danger">||</span>
        <span style="text-transform: uppercase; font-family: Consolas;">Dars jadvali</span>
    </div>
    <br>
    <div class="col-xs-12">
        <div class="alert alert-danger" style="text-transform: uppercase; text-align: center; color: #080808;">
            <b>6-Umumta`lim maktabining  2015 -  2016 o`quv yili uchun dars jadvali</b>
            <b class="pull-right">
                <a href="timetable1.php">
                    <button class="btn btn-sm btn-info" style="color: black">Yuqori Sinflar Uchun <span style="color: red"> >> </span></button>
                </a>
            </b>
        </div>
    </div>
    <div class="col-xs-12">
                <table class="table table-bordered table-striped text-center">
                    <thead style="background: rgba(92, 153, 244, 0.8);">
                        <?php
                            $sql_sinf = mysql_query("SELECT * FROM `sinflar` WHERE `type` = 1 ORDER BY `sinf` ASC");
                            $num_sinf = mysql_num_rows($sql_sinf);

                            $HAFTA_KUNLARI = array("D<br><br>u<br><br>sh<br><br>a<br><br>n<br><br>b<br><br>a",
                                                   "S<br><br>e<br><br>sh<br><br>a<br><br>n<br><br>b<br><br>a",
                                                   "Ch<br><br>o<br><br>r<br><br>sh<br><br>a<br><br>n<br><br>b<br><br>a",
                                                   "P<br><br>a<br><br>y<br><br>sh<br><br>a<br><br>n<br><br>b<br><br>a",
                                                   "<br><br>J<br><br>u<br><br>m<br><br>a",
                                                   "<br><br>Sh<br><br>a<br><br>n<br><br>b<br><br>a");
                        ?>
                        <tr>
                            <th></th>
                            <th  class="text-center">N</th>
                            <?php
                               for($i = 0; $i < $num_sinf; $i++){
                                   $SINF_ID   = mysql_result($sql_sinf,$i,'id');
                                   $SINF_NAME = mysql_result($sql_sinf,$i,'sinf');
                                   print "<th  class='text-center'>$SINF_NAME</th>";
                               }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dars jadval begin -->
                        <?php
                        for($kun = 1; $kun < 7; $kun++) {
                            $ijk = $kun - 1;
                            print"<tr>
                                       <th style=\"background: rgba(250, 25, 36, 0.53)\" rowspan=\"8\">
                                           $HAFTA_KUNLARI[$ijk]
                                       </th>
                                  </tr>";
                            for ($soat = 1; $soat <= 7; $soat++) {
                                print "<tr>";
                                    print "<td  class='text-center'>$soat</td>";
                                    for ($i = 0; $i < $num_sinf; $i++) {
                                        $SINF_ID = mysql_result($sql_sinf, $i, 'id');
                                        $FAN_NAME = FanNameFunc($SINF_ID, $kun, $soat);

                                        print "<td  class='text-center'>$FAN_NAME</td>";
                                    }
                                print "</tr>";
                            }
                            $cols = $num_sinf + 2;
                            print"<tr>
                                       <th style=\"background: #b2dba1\"  colspan='$cols'></th>
                                  </tr>";
                        }
                            ?>
                        <!-- Dars jadval end -->
                    </tbody>
                </table>
    </div>

<?php include("footer.php"); ?>