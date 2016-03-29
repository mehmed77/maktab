<?php
    include("style.php");
    include("connect_db.php");

    $sql    = mysql_query("SELECT * FROM `zvanok` WHERE `smena` = 1");
    $nums   = mysql_num_rows($sql);
    $sql_1  = mysql_query("SELECT * FROM `zvanok` WHERE `smena` = 2");
    $nums_1 = mysql_num_rows($sql_1);
?>
<div id="banner" style="width: 100%; background: #428bca; font-size: 45px; padding-top: 16px; padding-left: 50px;  border-bottom: 5px double #0078D1; height: 100px;">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">Qo'ng'iroqlar Jadvali</span>
</div>
<br>
<form action="add_zvanoq.php" method="post">
    <div class="col-xs-12">
        <div class="col-xs-6">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <b style="color: #000;">Birinchi Simena uchun jadval</b>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered text-center table-striped">
                        <tr>
                            <td class="col-xs-2">Dars</td>
                            <td class="col-xs-5">Kirish</td>
                            <td class="col-xs-5">Chiqish</td>
                        </tr>
                        <?php
                            $count = 0;
                            for($i = 0; $i < $nums; $i++){
                                $count++;
                                $id_1      = mysql_result($sql,$i,'id');
                                $kirish_1  = mysql_result($sql,$i,'kirish');
                                $chiqish_1 = mysql_result($sql,$i,'chiqish');
                                $first  = "first_".$count;
                                $second = "second_".$count;
                        ?>
                                <tr>
                                    <td><?php print $count; ?></td>
                                    <td><input class="form-control" type="text" name="<?php print $first; ?>" value="<?php print $kirish_1; ?>"></td>
                                    <td><input class="form-control" type="text" name="<?php print $second; ?>" value="<?php print $chiqish_1; ?>"></td>
                                </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <b style="color: #000;">Ikkinchi Simena uchun jadval</b>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered text-center table-striped">
                        <tr>
                            <td class="col-xs-2">Dars</td>
                            <td class="col-xs-5">Kirish</td>
                            <td class="col-xs-5">Chiqish</td>
                        </tr>
                        <?php
                        $count = 0; $cnt = 7;
                        for($i = 0; $i < $nums_1; $i++){
                            $count++; $cnt++;
                            $id_1      = mysql_result($sql_1,$i,'id');
                            $kirish_1  = mysql_result($sql_1,$i,'kirish');
                            $chiqish_1 = mysql_result($sql_1,$i,'chiqish');
                            $first  = "first_".$cnt;
                            $second = "second_".$cnt;
                            ?>
                            <tr>
                                <td><?php print $count; ?></td>
                                <td><input class="form-control" type="text" name="<?php print $first; ?>" value="<?php print $kirish_1; ?>"></td>
                                <td><input class="form-control" type="text" name="<?php print $second; ?>" value="<?php print $chiqish_1; ?>"></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="panel panel-body panel-primary">
                <button class="center-block btn btn-primary" type="submit">Tasdiqlash</button>
            </div>
        </div>
    </div>
</form>

