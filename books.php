<?php
$link = "oqituvchi";
require ("header.php");
require ("connect_db.php");
require ("Menu.php");
$left_menu = new Menu();
?>
<div class="menu-header">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">Elektron darsliklar</span>
</div>
<br>
<div class="col-xs-12">
    <div class="col-xs-9">
            <div class="panel panel-success">
                <div class="panel-heading">9 - Siniflar uchun</div>
                <div class="panel-body">
                    <table class="table table-responsive table-striped" style="width: 100%">
                        <?php
                        $sql_1 = mysql_query("SELECT * FROM darslik WHERE sinf_id = 9 ORDER BY id");
                        $res_1 = mysql_num_rows($sql_1);
                        $count = 0;
                        for($i = 0; $i < $res_1; $i++) {
                            $count++;
                            $fanName = mysql_result($sql_1,$i,'fanName');
                            $link_uz = mysql_result($sql_1,$i,'link_uz');
                            $link_ru = mysql_result($sql_1,$i,'link_ru');
                            ?>
                            <tr>
                                <td width="1%"><?php print $count; ?>.</td>
                                <td width=68%"><?php print $fanName; ?></td>
                                <td class="text-center" style="font-size: 12px">
                                    <a href="<?php print $link_uz; ?>">(Yuklab olish (Uz))</a>
                                </td>
                                <td class="text-center" style="font-size: 12px">
                                    <a href="<?php print $link_ru; ?>">(Скачать (Ру))</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        <div class="panel panel-success">
            <div class="panel-heading">8 - Siniflar uchun</div>
            <div class="panel-body">
                <table class="table table-responsive table-striped" style="width: 100%">
                    <?php
                    $sql_1 = mysql_query("SELECT * FROM darslik WHERE sinf_id = 8 ORDER BY id");
                    $res_1 = mysql_num_rows($sql_1);
                    $count = 0;
                    for($i = 0; $i < $res_1; $i++) {
                        $count++;
                        $fanName = mysql_result($sql_1,$i,'fanName');
                        $link_uz = mysql_result($sql_1,$i,'link_uz');
                        $link_ru = mysql_result($sql_1,$i,'link_ru');
                        ?>
                        <tr>
                            <td width="1%"><?php print $count; ?>.</td>
                            <td width=68%"><?php print $fanName; ?></td>
                            <td class="text-center" style="font-size: 12px">
                                <a href="<?php print $link_uz; ?>">(Yuklab olish (Uz))</a>
                            </td>
                            <td class="text-center" style="font-size: 12px">
                                <a href="<?php print $link_ru; ?>">(Скачать (Ру))</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">7 - Siniflar uchun</div>
            <div class="panel-body">
                <table class="table table-responsive table-striped" style="width: 100%">
                    <?php
                    $sql_1 = mysql_query("SELECT * FROM darslik WHERE sinf_id = 7 ORDER BY id");
                    $res_1 = mysql_num_rows($sql_1);
                    $count = 0;
                    for($i = 0; $i < $res_1; $i++) {
                        $count++;
                        $fanName = mysql_result($sql_1,$i,'fanName');
                        $link_uz = mysql_result($sql_1,$i,'link_uz');
                        $link_ru = mysql_result($sql_1,$i,'link_ru');
                        ?>
                        <tr>
                            <td width="1%"><?php print $count; ?>.</td>
                            <td width=68%"><?php print $fanName; ?></td>
                            <td class="text-center" style="font-size: 12px">
                                <a href="<?php print $link_uz; ?>">(Yuklab olish (Uz))</a>
                            </td>
                            <td class="text-center" style="font-size: 12px">
                                <a href="<?php print $link_ru; ?>">(Скачать (Ру))</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">6 - Siniflar uchun</div>
            <div class="panel-body">
                <table class="table table-responsive table-striped" style="width: 100%">
                    <?php
                    $sql_1 = mysql_query("SELECT * FROM darslik WHERE sinf_id = 6 ORDER BY id");
                    $res_1 = mysql_num_rows($sql_1);
                    $count = 0;
                    for($i = 0; $i < $res_1; $i++) {
                        $count++;
                        $fanName = mysql_result($sql_1,$i,'fanName');
                        $link_uz = mysql_result($sql_1,$i,'link_uz');
                        $link_ru = mysql_result($sql_1,$i,'link_ru');
                        ?>
                        <tr>
                            <td width="1%"><?php print $count; ?>.</td>
                            <td width=68%"><?php print $fanName; ?></td>
                            <td class="text-center" style="font-size: 12px">
                                <a href="<?php print $link_uz; ?>">(Yuklab olish (Uz))</a>
                            </td>
                            <td class="text-center" style="font-size: 12px">
                                <a href="<?php print $link_ru; ?>">(Скачать (Ру))</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">5 - Siniflar uchun</div>
            <div class="panel-body">
                <table class="table table-responsive table-striped" style="width: 100%">
                    <?php
                    $sql_1 = mysql_query("SELECT * FROM darslik WHERE sinf_id = 5 ORDER BY id");
                    $res_1 = mysql_num_rows($sql_1);
                    $count = 0;
                    for($i = 0; $i < $res_1; $i++) {
                        $count++;
                        $fanName = mysql_result($sql_1,$i,'fanName');
                        $link_uz = mysql_result($sql_1,$i,'link_uz');
                        $link_ru = mysql_result($sql_1,$i,'link_ru');
                        ?>
                        <tr>
                            <td width="1%"><?php print $count; ?>.</td>
                            <td width=68%"><?php print $fanName; ?></td>
                            <td class="text-center" style="font-size: 12px">
                                <a href="<?php print $link_uz; ?>">(Yuklab olish (Uz))</a>
                            </td>
                            <td class="text-center" style="font-size: 12px">
                                <a href="<?php print $link_ru; ?>">(Скачать (Ру))</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">4 - Siniflar uchun</div>
            <div class="panel-body">
                <table class="table table-responsive table-striped" style="width: 100%">
                    <?php
                    $sql_1 = mysql_query("SELECT * FROM darslik WHERE sinf_id = 4 ORDER BY id");
                    $res_1 = mysql_num_rows($sql_1);
                    $count = 0;
                    for($i = 0; $i < $res_1; $i++) {
                        $count++;
                        $fanName = mysql_result($sql_1,$i,'fanName');
                        $link_uz = mysql_result($sql_1,$i,'link_uz');
                        $link_ru = mysql_result($sql_1,$i,'link_ru');
                        ?>
                        <tr>
                            <td width="1%"><?php print $count; ?>.</td>
                            <td width=68%"><?php print $fanName; ?></td>
                            <td class="text-center" style="font-size: 12px">
                                <a href="<?php print $link_uz; ?>">(Yuklab olish (Uz))</a>
                            </td>
                            <td class="text-center" style="font-size: 12px">
                                <a href="<?php print $link_ru; ?>">(Скачать (Ру))</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">3 - Siniflar uchun</div>
            <div class="panel-body">
                <table class="table table-responsive table-striped" style="width: 100%">
                    <?php
                    $sql_1 = mysql_query("SELECT * FROM darslik WHERE sinf_id = 3 ORDER BY id");
                    $res_1 = mysql_num_rows($sql_1);
                    $count = 0;
                    for($i = 0; $i < $res_1; $i++) {
                        $count++;
                        $fanName = mysql_result($sql_1,$i,'fanName');
                        $link_uz = mysql_result($sql_1,$i,'link_uz');
                        $link_ru = mysql_result($sql_1,$i,'link_ru');
                        ?>
                        <tr>
                            <td width="1%"><?php print $count; ?>.</td>
                            <td width=68%"><?php print $fanName; ?></td>
                            <td class="text-center" style="font-size: 12px">
                                <a href="<?php print $link_uz; ?>">(Yuklab olish (Uz))</a>
                            </td>
                            <td class="text-center" style="font-size: 12px">
                                <a href="<?php print $link_ru; ?>">(Скачать (Ру))</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">2 - Siniflar uchun</div>
            <div class="panel-body">
                <table class="table table-responsive table-striped" style="width: 100%">
                    <?php
                    $sql_1 = mysql_query("SELECT * FROM darslik WHERE sinf_id = 2 ORDER BY id");
                    $res_1 = mysql_num_rows($sql_1);
                    $count = 0;
                    for($i = 0; $i < $res_1; $i++) {
                        $count++;
                        $fanName = mysql_result($sql_1,$i,'fanName');
                        $link_uz = mysql_result($sql_1,$i,'link_uz');
                        $link_ru = mysql_result($sql_1,$i,'link_ru');
                        ?>
                        <tr>
                            <td width="1%"><?php print $count; ?>.</td>
                            <td width=68%"><?php print $fanName; ?></td>
                            <td class="text-center" style="font-size: 12px">
                                <a href="<?php print $link_uz; ?>">(Yuklab olish (Uz))</a>
                            </td>
                            <td class="text-center" style="font-size: 12px">
                                <a href="<?php print $link_ru; ?>">(Скачать (Ру))</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">1 - Siniflar uchun</div>
            <div class="panel-body">
                <table class="table table-responsive table-striped" style="width: 100%">
                    <?php
                        $sql_1 = mysql_query("SELECT * FROM darslik WHERE sinf_id = 1 ORDER BY id");
                        $res_1 = mysql_num_rows($sql_1);
                        $count = 0;
                        for($i = 0; $i < $res_1; $i++) {
                            $count++;
                            $fanName = mysql_result($sql_1,$i,'fanName');
                            $link_uz = mysql_result($sql_1,$i,'link_uz');
                            $link_ru = mysql_result($sql_1,$i,'link_ru');
                    ?>
                        <tr>
                            <td width="1%"><?php print $count; ?>.</td>
                            <td width=68%"><?php print $fanName; ?></td>
                            <td class="text-center" style="font-size: 12px">
                                <a href="<?php print $link_uz; ?>">(Yuklab olish (Uz))</a>
                            </td>
                            <td class="text-center" style="font-size: 12px">
                                <a href="<?php print $link_ru; ?>">(Скачать (Ру))</a>
                            </td>
                        </tr>
                        <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <div class="col-xs-3">
        <?php
            $left_menu->HikmatliSozlar();
            $left_menu->AsosoiyLeftMenu();
            $left_menu->CurrentYearName();
            $left_menu->FoydaliManbalar();
            $left_menu->Mojizalar();
        ?>
    </div>
</div>
