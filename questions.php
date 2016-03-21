<?php
$link = "otaona";
include ("connect_db.php");
include ("header.php");
include ("Menu.php");
$left_menu = new Menu();
?>
<div class="menu-header">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">Savol va javoblar</span>
</div>
<br>
<script>
    $(function () {
        $('a[data-toggle="collapse"]').on('click',function(){

            var objectID=$(this).attr('href');

            if($(objectID).hasClass('in'))
            {
                $(objectID).collapse('hide');
            }

            else{
                $(objectID).collapse('show');
            }
        });
        $('#expandAll').on('click',function(){

            $('a[data-toggle="collapse"]').each(function(){
                var objectID=$(this).attr('href');
                if($(objectID).hasClass('in')===false)
                {
                    $(objectID).collapse('show');
                }
            });
        });

        $('#collapseAll').on('click',function(){

            $('a[data-toggle="collapse"]').each(function(){
                var objectID=$(this).attr('href');
                $(objectID).collapse('hide');
            });
        });

    });
</script>
<div class="col-xs-12">
    <div class="col-xs-9">
        <?php
        $sql  = mysql_query("SELECT * FROM `savol_javob` ORDER BY `savol_javob`.`id` ASC");
        $nums = mysql_num_rows($sql);
        ?>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="pull-right"> <a id="expandAll" href="#" class="btn btn-default" role="button">Expand All</a>
                <a id="collapseAll" href="#" class="btn btn-default" role="button">Collapse All</a>
            </div>
        </div>
        <br/>
        <br/>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel-group" id="accordion">
                <?php
                for($i = 0; $i < $nums; $i++){
                    $SAVOL_ID  = mysql_result($sql,$i,'id');
                    $SAVOL_SAV = mysql_result($sql,$i,'savol');
                    $SAVOL_JAV = mysql_result($sql,$i,'javob');
                    $collepse  = "collepse_".$SAVOL_ID;
                ?>
                <div class="panel" style="background: rgba(168, 171, 221, 0.98)">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-11">
                               <?php print $SAVOL_SAV; ?>
                            </div>
                            <div class="col-xs-1">
                                <a class="btn btn-sm btn-success pull-right" data-toggle="collapse" data-parent="#accordion" href="#<?php print $collepse; ?>">
                                    Javob
                                </a>
                            </div></div>
                    </div>
                    <div id="<?php print $collepse; ?>" class="panel-collapse collapse" style="background: rgba(251, 248, 253, 0.97)">
                        <div class="panel-body">
                           <?php print $SAVOL_JAV; ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="col-xs-3">
        <?php
        $left_menu->OtaOnalar();
        ?>
    </div>
</div>

<?php include("footer.php");?>