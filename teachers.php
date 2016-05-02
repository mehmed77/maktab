<?php
    $link = "oqituvchi";
    require ("header.php");
    require ("connect_db.php");
    require ("Menu.php");
    $left_menu = new Menu();

    if(isset($_GET['page']) && is_numeric($_GET['page'])){
        $page = ($_GET['page'] - 1 )* 5;
        $activePage = $_GET['page'];
    }else{
        $activePage = 1;
        $page = 0;
    }
    $sql = mysql_query("select * from teacher ORDER BY Id ASC LIMIT $page, 5");
    $nums = mysql_num_rows($sql);
?>
    <div class="menu-header">
        <span class="text-danger">||</span>
        <span style="text-transform: uppercase; font-family: Consolas;">O'qituvchilar jamoasi</span>
    </div>
    <br>
    <div class="col-xs-12">
        <div class="col-xs-9">
            <?php
               for($i = 0; $i < $nums; $i++){
                   $TEACH_ID    = mysql_result($sql,$i,'Id');
                   $FAM_ISM_OTA = mysql_result($sql,$i,'LName')." ".mysql_result($sql,$i,'FName')." ".mysql_result($sql,$i,'MName');
                   $MUTAXASSIS  = mysql_result($sql,$i,'DipMutaxasisligi');
                   $BDATE       = mysql_result($sql,$i,'BDate');
                   $TUGJOYI     = mysql_result($sql,$i,'TugManzil');
                   $TAMOMLAGAN  = mysql_result($sql,$i,'Tugatgan');
                   $SURAT       = mysql_result($sql,$i,'img_link');
                   $MALUMOTI    = mysql_result($sql,$i,'Malumoti');
                   $TOIFASI     = mysql_result($sql,$i,'Toifa');
                   // Mexnat Faoliyati
                   $sqltxt   = mysql_query("select * from mehnat WHERE TeachId = $TEACH_ID ORDER BY IshJoyi ASC");
                   $numstxt  = mysql_num_rows($sqltxt);
            ?>
<!--          BU YERDA SIKL AYLANADi  -->
                <div class="panel panel-body panel-primary">
                    <div style="padding-top: 3px; text-transform: uppercase; text-align: center; font-size: large; height: 30px; border-bottom: 1px dashed black">
                        <b><?php print $FAM_ISM_OTA; ?></b>
                    </div>
                    <div style="width: 25%; height: 250px; float: left">
                        <img src="<?php print $SURAT; ?>" class="img-thumbnail"  style="margin: 1px;" width="100%" height="100%">
                    </div>
                    <div style="width: 70%; float: right">
                        <ul class="style1">
                            <li><b>Mутахассислиги бўйича: </b> <?php print $MUTAXASSIS; ?></li>
                            <li><b>Туғилган йили: </b> <?php print $BDATE; ?></li>
                            <li><b>Туғилган жойи: </b> <?php print $TUGJOYI; ?></li>
                            <li><b>Тамомлаган: </b> <?php print $TAMOMLAGAN; ?></li>
                            <li><b>Маълумоти: </b> <?php print $MALUMOTI; ?>, &nbsp;<b>Тоифаси: </b> <?php print $TOIFASI; ?></li>
                            <li class="text-center"><b>МЕХНАТ ФАОЛИЯТИ</b></li>
                            <ul>
                                <?php
                                   for($j = 0; $j < $numstxt; $j++){
                                       $ISHJOYI = mysql_result($sqltxt,$j,'IshJoyi');
                                        print "<li style='text-align: left'>$ISHJOYI</li>";
                                    }
                                ?>
                            </ul>
                        </ul>
                    </div>
                </div>
<!--          BU YERDA SIKL TUGAYDI  -->
                <?php } ?>
            <div class="text-center">
                <ul class="pagination pagination-lg">
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li class="<?php print $activePage == 1 ? "active":""; ?>"><a href="?page=1">1</a></li>
                    <li class="<?php print $activePage == 2 ? "active":""; ?>"><a href="?page=2">2</a></li>
                    <li class="<?php print $activePage == 3 ? "active":""; ?>"><a href="?page=3">3</a></li>
                    <li class="<?php print $activePage == 4 ? "active":""; ?>"><a href="?page=4">4</a></li>
                    <li class="<?php print $activePage == 5 ? "active":""; ?>"><a href="?page=5">5</a></li>
                    <li class="<?php print $activePage == 6 ? "active":""; ?>"><a href="?page=6">6</a></li>
                    <li class="<?php print $activePage == 7 ? "active":""; ?>"><a href="?page=7">7</a></li>
                    <li class="disabled"><a href="#">&raquo;</a></li>
                </ul></div>
        </div>
        <div class="col-xs-3">
            <?php $left_menu->Oqituvchi(); $left_menu->AsosoiyLeftMenu(); ?>

        </div>
</div>
<?php
  require ("footer.php");
?>