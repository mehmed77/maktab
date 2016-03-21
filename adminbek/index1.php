<?php
    $link = "oqituvchi";
    require("header.php");
    require("connect_db.php");
    if(isset($_GET['page']) && is_numeric($_GET['page'])){
        $page = ($_GET['page'] - 1 )* 5;
        $activePage = $_GET['page'];
    }else{
        $activePage = 1;
        $page = 0;
    }
    $sql = mysql_query("select * from teacher order by LName ASC");
    $nums = mysql_num_rows($sql);
?>
    <div class="menu-header">
        <span class="text-danger">||</span>
        <span style="text-transform: uppercase; font-family: Consolas;">O'qituvchilar jamoasi</span>
    </div>
    <br>
    <div class="col-xs-12">
        <div class="col-xs-9">
			  <table class="table table-bordered">
			      <tr>
						<th>N</th>
						<th>F.I.O</th>
				  </tr>
            <?php
			$count = 0;
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
                  $count++;
            ?>
			 <tr>
			    <td><?php print $count; ?></td>
			    <td><a href="addmehnat.php?id=<?php print $TEACH_ID; ?>"><?php print $FAM_ISM_OTA; ?></a></td>
			 </tr>
			   <?php } ?>
			</table>
<?php
  require("../footer.php");
?>