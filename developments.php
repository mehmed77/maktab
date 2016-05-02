<?php
$link = "oqituvchi";
require ("header.php");
require ("connect_db.php");
require ("Menu.php");
$left_menu = new Menu();
?>
<div class="menu-header">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">Dars ishlanmalar</span>
</div>
<br>
<div class="col-xs-12">
    <div class="col-xs-9">
        <table class="table table-responsive table-striped">
            <tr>
                <th class="text-center">Fan Nomi</th>
                <th class="text-center">Mavzu Nomi</th>
                <th></th>
            </tr>
            <tr >
                <td width="160px;">Informatika</td>
                <td width="">Dars Ishlanam</td>
                <td width="150px">
                    <a href="#" style="font-family: 'Book Antiqua'"><img style="width: 17px;" src="<?php print URL_IMG;?>office/word.png"> ( Yuklab oling )</a>
                </td>
            </tr>
            <tr>
                <td width="160px;">Informatika</td>
                <td width="">Dars Ishlanam</td>
                <td width="150px">
                    <a href="#" style="font-family: 'Book Antiqua'"><img style="width: 20px;" src="<?php print URL_IMG;?>office/pdf.png"> ( Yuklab oling )</a>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-xs-3">
        <?php
            $left_menu->Oqituvchi();
            $left_menu->KopOqilganYangilklar();
            $left_menu->SongiYangiliklar();
        ?>
    </div>
</div>
<?php
        include ("footer.php");
?>