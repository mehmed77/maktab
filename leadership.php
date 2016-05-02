<?php
   $id = null;
   if(isset($_GET['id']) && is_numeric($_GET['id'])){
        $id = $_GET['id'];
   }else{
       header("location: rahbariyat.php");
       exit(0);
   }
   $top_menu = "";
   switch($id){
       case 1: $top_menu = "АКРОМОВА ВИЛОЯТ ЖОРАЕВНА";
           break;
       case 2: $top_menu = "Магдалиева Нигора Хусановна";
           break;
       case 3: $top_menu = "Жумабаева Нодира Кучкарходжаевна";
           break;
       default: header("location: rahbariyat.php");
           exit(0);
   }
    $link = "oqituvchi";
    include ("Menu.php");
    $left_menu = new Menu();
    require ("header.php");
?>
    <div class="menu-header">
        <span class="text-danger">||</span>
        <span style="text-transform: uppercase; font-family: Consolas;"><?php print $top_menu; ?></span>
    </div>
    <br>
    <div class="col-xs-12">
        <div class="col-xs-9">
            <?php
               switch($id){
                   case 1: include("rahbariyat/director.php");
                       break;
                   case 2: include("rahbariyat/nigora.php");
                       break;
                   case 3: include("rahbariyat/nodira.php");
                       break;
               }
            ?>
        </div>
        <div class="col-xs-3">
            <?php
                $left_menu->RahbariyatMenu();
                $left_menu->Oqituvchi();
            ?>
        </div>
</div>
<?php
  require ("footer.php");
?>