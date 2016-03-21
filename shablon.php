<?php
include("connect_db.php");
include("header.php");
$dateTime = "152 0 ";
$HaftaKun = "shanba";
$newMavzu
?>
<div class="col-xs-12">
    <!--        Asosiy Yangilik -->
    <div class="col-xs-9">
        <div class="panel panel-primary">

            <div class="panel-heading">
                <b style="color: black;">News: </b> <span style="color: #0f0f0f; font-family: cursive"><?php print $dateTime;?></span>  <mark style="color: #2b542c"><?php print $HaftaKun;?></mark>
            </div>

            <div class="panel-body">

            </div>
        </div>
    </div>
    <!--        Asosiy Yangilik tugadi-->
    <div class="col-xs-3">
        <!--            Elon begin-->
        <div class="panel panel-primary">
            <div class="panel-heading text-center">
                <b style="text-transform: uppercase;">E'lon</b>
            </div>
            <div class="panel-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consequuntur ea earum error eum ex excepturi fugit harum hic illum, ipsam iste modi molestias nam perspiciatis porro recusandae totam veritatis!
                </p>
            </div>
        </div
            <!--            Elon end-->
        <?php
//          Oxirgi qo'shilgan 5 ta yangilik
            $right_menu->SongiYangiliklar();
//          Ko'p o'qilgan 5 ta yangilik
            $right_menu->KopOqilganYangilklar();
        ?>
        </div>
    </div>
</div>