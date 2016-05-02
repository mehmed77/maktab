<?php
if(isset($_GET['res'])){
    if($_GET['res'] == "ok"){
        header( "refresh:4;url=aloqa.php" );
    }else{
        header( "refresh:4;url=aloqa.php" );
    }
}

$link = "aloqa";
require ("header.php");
require ("connect_db.php");
require ("Menu.php");
$left_menu = new Menu();
?>
<div class="menu-header">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">Biz bilan aloqa</span>
</div>
<br>
<div class="col-xs-12">
    <div class="col-xs-6">
        <table class="table table-bordered table-responsive table-striped">
            <tr>
                <th colspan="2" style="text-align: center; font-family: Consolas; text-transform: uppercase; font-size: larger">BIZ BILAN BOG'LANISH</th>
            </tr>
            <tr>
                <th style="width: 15px;">Email:</th><td> mr.habibullayev@gmail.com</td>
            </tr>
            <tr>
                <th>Telefon:</th><td> 264 98 70</td>
            </tr>
            <tr>
                <th>Manzil:</th><td> Toshkent viloyati Qibray tumani</td>
            </tr>
        </table>
    </div>
    <div class="col-xs-6">
        <?php
        if(isset($_GET['res'])){
            if($_GET['res'] == "ok"){
                print'<div class="alert alert-success"><i class="fa fa-check-circle"></i> Xabar muovfaqiyatli jo`natildi. <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
            }else{
                print'<div class="alert alert-danger"><i class="fa fa-check-circle"></i> Xatolik yuz berdi iltimos qayta urinib ko`ring. <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
            }
        }
        ?>
        <form action="aloqa_add.php" method="POST">
            <table style="width: 100%" class="table table-bordered table-responsive table-striped">
                <tr>
                    <th colspan="2" style="text-align: center; font-family: Consolas; text-transform: uppercase; font-size: larger">Qayta aloqa uchun</th>
                </tr>
                <tr>
                    <td width="70px">FISh <b style="color: red">*</b></td>
                    <td>
                        <input id="login" name="fish" type="text" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Email <b style="color: red">*</b></td>
                    <td>
                        <input name="email" type="text" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Mavzu  <b style="color: red">*</b></td>
                    <td>
                        <input name="mavzu" type="text" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Xabar  <b style="color: red">*</b></td>
                    <td>
                        <textarea rows="5" name="xabar" class="form-control"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                    <button class="btn btn-primary center-block" type="submit">Jo'natish</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php
include("footer.php");
?>