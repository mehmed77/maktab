<?php
  include("style.php");
?>
<div id="banner" style="width: 100%; background: #428bca; font-size: 45px; padding-top: 16px; padding-left: 50px;  border-bottom: 5px double #0078D1; height: 100px;">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">Yangilik qo'shish</span>
</div>
<br>
<div style="min-width: 1200px;">
    <form action="add_IndexNews.php" method="post" enctype="multipart/form-data">
        <div style="width: 1280px;" class="center-block">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Bosh Menyuga Yangilik Qo'shish
                </div>
                <div class="panel-body">
                    <table width="100%">
                        <tr>
                            <td><input  class="form-control" type="text" name="mavzu" placeholder="Mavzu Nomini qo'shing" value=""></td>
                        </tr>
                        <tr>
                            <td><input  class="form-control" type="text" name="author" placeholder="Yangilik kim tomonidan kiritilmoqda" value=""></td>
                        </tr>
                        <tr>
                            <td><input class="form-control" type="file" name="fileToUpload" value=""></td>
                        </tr>
                        <tr>
                            <td>
                                <textarea rows="5" class="form-control" name="shortnews" placeholder="Mavzuga qisqacha izoh"></textarea>
                                <br/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-success center-block">
                                    Yangilik menusini to'ldiring
                                </span><br/>
                                <textarea class="ckeditor" id="ckeditor" name="longnews"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button class="center-block btn btn-primary" type="submit">Add News</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </form>
</div>
