<?php
require("Menu.php");
$left_menu = new Menu();
require("header.php");
?>
<div class="menu-header">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">Qo`shimcha ma'lumotlar</span>
</div>
<br>
<div class="col-xs-12">
    <div class="col-xs-9">

        <div class="panel panel-success">
            <div class="panel-heading">
                <b style="text-transform: uppercase;">qo'shimcha ma'lumot</b>
            </div>
            <div class="panel-body">
                <div class="col-xs-6">
                    <div class="panel panel-body panel-danger">
                        <table class="table table-bordered table-responsive table-striped">
                            <tr>
                                <td width="60%" style="text-align: right">Jami o'qtuvchilar soni:</td>
                                <td width="60%">38</td>
                            </tr>
                            <tr>
                                <td style="text-align: right">I toifalilar:</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td style="text-align: right">II toifalilar:</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td style="text-align: right">Mutaxassislar:</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <td style="text-align: right">O'rta maxsuslar:</td>
                                <td>1</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="panel panel-danger panel-body">
                        <table class="table table-bordered table-responsive table-striped">
                            <tr>
                                <td width="60%" style="text-align: right">Jami o'quvchi soni:</td>
                                <td width="60%">447</td>
                            </tr>
                            <tr>
                                <td style="text-align: right">O'g'il bolalar:</td>
                                <td>218</td>
                            </tr>
                            <tr>
                                <td style="text-align: right">Qiz bolalar:</td>
                                <td>229</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-3">
        <?php
        $left_menu->HikmatliSozlar();
        $left_menu->QoshimchaMalumotlar();
        $left_menu->CurrentYearName();
        $left_menu->AsosoiyLeftMenu();
        $left_menu->FoydaliManbalar();
        $left_menu->Mojizalar();
        ?>
    </div>
</div>
<?php
include "footer.php";
?>