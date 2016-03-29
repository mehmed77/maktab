<?php
    include("style.php");
    include("connect_db.php");
?>
<div id="banner" style="width: 100%; background: #428bca; font-size: 45px; padding-top: 16px; padding-left: 50px;  border-bottom: 5px double #0078D1; height: 100px;">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">Yangi Sinf qo'shish</span>
</div>
<br>
<div class="col-xs-12">
    <div class="col-xs-9">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Qibray tumani 6-son maktabi sinflar ro'yxati
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <td class="col-xs-1">N</td>
                        <td class="col-xs-8">Sinflar sinflar</td>
                        <td class="col-xs-1">Edit</td>
                        <td class="col-xs-1">Delet</td>
                        <td class="col-xs-1">Jadval</td>
                    </tr>
                    <?php
                        $count = 0;
                        $sql = mysql_query("SELECT * FROM `sinflar` ORDER BY `sinflar`.`sinf` ASC");
                        $nums = mysql_num_rows($sql);
                        for($i = 0; $i < $nums; $i++){
                            $count++;
                            $id   = mysql_result($sql,$i,'id');
                            $sinf = mysql_result($sql,$i,'sinf');
                    ?>
                    <tr>
                        <td><?php print $count; ?></td>
                        <td><?php print $sinf; ?></td>
                        <td><a href="answerclass.php?action=edit&id=<?php print $id; ?>"><span>Edit</span></a></td>
                        <td><a href="answerclass.php?action=delete&id=<?php print $id; ?>"><span>Delete</span></a></td>
                        <td><a href="jadvalclass.php?id=<?php print $id; ?>"><button class="btn btn-primary btn-sm">Kirish</button></a></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <div class="col-xs-3">
        <form action="add_class.php" method="post">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Sinf qo'shish
                </div>
                <div class="panel-body">
                    <input class="form-control" type="text" name="addsinf">
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary btn-sm center-block">Creat Class</button>
                </div>
            </div>
        </form>
    </div>
</div>
