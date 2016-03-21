<?php
    $link = "home";
    include ("connect_db.php");
    require ("Count.php");
    include("Menu.php");
    $right_menu = new Menu();

    if(isset($_GET['id']) && is_numeric($_GET['id'])){
        $id = $_GET['id'];
    }else{
        header("location: index.php");
        exit(0);
    }
    include ("header.php");
		$count = new Count();
        $count->IndexNewsCount($id);
    $sqltxt = mysql_query("select * from news WHERE id = $id");
    if($rows = mysql_fetch_array($sqltxt)){
        
        $dateTime = date("d.m.Y H:i",$rows['date_news']);
        $kun = date("w",$rows['date_news']);
        $hafta = array("Yakshanba","Dushanba","Seshanba","Chorshanba","Payshanba","Juma","Shanba");
        $HaftaKun = $hafta[$kun];
        $long_news = $rows['long_news'];
    }else{
        header("location: index.php");
        exit(0);
    }
?>
<!--    <div id="banner">-->
<!--        <img src="images/maktab.jpg" width="1150" height="300" alt="" />-->
<!--    </div>-->
    <div class="menu-header">
        <span class="text-danger">||</span>
        <span style="text-transform: uppercase; font-family: Consolas;">Sayt yangiliklari</span>
    </div>
    <br>
<div class="col-xs-12">
    <!--        Asosiy Yangilik -->
    <div class="col-xs-9">
        <div class="panel panel-primary">

            <div class="panel-heading">
                <b style="color: black;">News: </b> <span style="color: #0f0f0f; font-family: cursive"><?php print $dateTime;?></span>  <mark style="color: #2b542c"><?php print $HaftaKun;?></mark>
            </div>

            <div class="panel-body">
                <?php
                print $long_news;
                ?>
            </div>
        </div>
    </div>
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


<?php
//  include("shablon.php");
   include ("footer.php")
?>

