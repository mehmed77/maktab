<?php
  include("style.php");
?>
<div id="banner" style="width: 100%; background: #428bca; font-size: 45px; padding-top: 16px; padding-left: 50px;  border-bottom: 5px double #0078D1; height: 100px;">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">Iqtidorli o'quvchi qo'shish</span>
</div>
<br>
<div class="col-xs-12">
    <form action="add_Iqtidor.php" method="post" enctype="multipart/form-data">
        <div class="col-lg-8 col-xs-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Iqtidorli o'quvchi qo'shish
                </div>
                <div class="panel-body">
                    <table width="100%">
                        <tr>
                            <td><input  class="form-control" type="text" name="fio" placeholder="O'quvchining ism familiyasi to'liq" value=""></td>
                        </tr>
                        <tr>
                            <td><input class="form-control" type="file" name="fileToUpload" value=""></td>
                        </tr>
                        <tr>
                            <td><textarea rows="15" class="form-control" name="more" placeholder="O'quvchi haqida to'liqroq"></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <button class="center-block btn btn-primary" type="submit">Qo'shish</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </form>
</div>
