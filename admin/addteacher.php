<?php
    include("connect_db.php");
    include("style.php");
?>
<div id="banner" style="width: 100%; background: #428bca; font-size: 45px; padding-top: 16px; padding-left: 50px;  border-bottom: 5px double #0078D1; height: 100px;">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">Yangi o'qituvchi qo'shish</span>
</div>
<br>
<div class="col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Account Forms
        </div>
        <div class="panel-body">
            <form action="add_teacher.php" method="post" accept-charset="utf-8">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td width="200px"><b>Ismi:</b></td>
                        <td><input autocomplete="off" class="form-control" type="text" name="fname"></td>
                    </tr>
                    <tr>
                        <td><b>Familya:</b></td>
                        <td><input autocomplete="off" class="form-control" type="text" name="lname"></td>
                    </tr>
                    <tr>
                        <td><b>Otasining ismi:</b></td>
                        <td><input autocomplete="off" class="form-control" type="text" name="mname"></td>
                    </tr>
                    <tr>
                        <td><b>Mутахассислиги бўйича:</b></td>
                        <td><input autocomplete="off" class="form-control" type="text" name="mutaxasis"></td>
                    </tr>
                    <tr>
                        <td><b>Туғилган йили:</b></td>
                        <td><input autocomplete="off" class="form-control" type="text" name="bdate"></td>
                    </tr>
                    <tr>
                        <td><b>Туғилган жойи:</b></td>
                        <td><input autocomplete="off" class="form-control" type="text" name="tugjoyi"></td>
                    </tr>
                    <tr>
                        <td><b>Тамомлаган:</b></td>
                        <td><input autocomplete="off" class="form-control" type="text" name="tamomlagan"></td>
                    </tr>
                    <tr>
                        <td><b>Маълумоти:</b></td>
                        <td><input autocomplete="off" class="form-control" type="text" name="malumoti"></td>
                    </tr>
                    <tr>
                        <td><b>Тоифаси:</b></td>
                        <td><input autocomplete="off" class="form-control" type="text" name="toifasi"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary center-block">Add Teacher</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
