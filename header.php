<?php
include("constants.php");
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Qibray tumani 6-maktab</title>
	<script src="<?php print URL_STYLE; ?>js/myjquery.js"></script>
	<script src="<?php print URL_STYLE; ?>js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php print URL_STYLE; ?>js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php print URL;?>templatemo_image_fader.js" type="text/javascript"></script>
    <link href="<?php print URL_STYLE;?>css/default.css" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="<?php print URL_STYLE;?>css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php print URL_STYLE;?>css/bootstrap-theme.css">
<!--    <link rel="shortcut icon" href="--><?php //print URL_STYLE;?><!--img/favicon.ico" type="image/png">-->
    <link href="<?php print URL_STYLE;?>css/font-awesome.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <div id="header-wrapper">
            <div id="header">
                <div id="logo">
                    <table cellpadding="2">
                        <tr>
                            <td>
                                <img src="<?php print URL;?>images/logo.png" alt=""/>
                            </td>
                            <td>
                                <h2 class="maktab"><b>QIBRAY TUMANI 6-SON UMUMIY O'RTA TA'LIM MAKTABI</b></h2>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div id="menu" style="margin: -110px 0px 0px -80px">
            <ul>
                <li class="<?php echo $link=='home' ? 'current_page_item' : ''  ?>"
                    ><a href="index.php" accesskey="1" title="">Bosh Sahifa</a>
                </li>
                <li class="<?php echo $link=='maktab' ? 'current_page_item' : ''  ?>">
                    <a href="maktab.php" accesskey="2" title="">Maktab va Ta'lim</a>
                    <ul>
                        <li><a href="pasport.php">Maktab passporti</a></li>
                        <li><a href="#">Maktab tarixi</a></li>
                        <li><a href="awards.php">Erishilgan yutuqlar</a></li>
                        <li><a href="#">Fan oyliklari</a></li>
                    </ul>
                </li>
                <li class="<?php echo $link=='oquvchi' ? 'current_page_item' : ''  ?>"><a href="#" accesskey="3" title="">O'quvchilarga</a>
                    <ul>
                        <li><a href="timetable.php">Dars jadvali</a> </li>
                        <li><a href="bell.php">Qo'ng'iroqlar jadvali</a> </li>
                        <li><a href="iqtidorli.php">Iqtidorli o'quvchilar</a> </li>
                        <li><a href="course.php">To'garaklar</a> </li>
                        <li><a href="kashfiyotlar.php">Ixtiro va kashfiyotlar</a> </li>
                    </ul>
                </li>
                <li  class="<?php echo $link=='oqituvchi' ? 'current_page_item' : ''  ?>"><a href="#" accesskey="4" title="">O'qtuvchilarga</a>
                    <ul>
                        <li><a href="teachers.php">Ustozlar</a> </li>
                        <li><a href="rahbariyat.php">Maktab rahbariyati</a> </li>
                        <li><a href="#">Tadbirlar senariysi</a> </li>
                        <li><a href="creative.php">Ijodkor o'qituvchilar</a> </li>
                        <li><a href="vasiylik.php">Vasiylik kengashi</a> </li>
                    </ul>
                </li>
                <li class="<?php echo $link=='otaona' ? 'current_page_item' : ''  ?>">
                    <a href="#" accesskey="5" title="">Ota-Onalarga</a>
                    <ul>
                        <li><a href="questions.php">Savol va javoblar</a></li>
                        <li><a href="tavfsiya.php">Tavfsiyalar</a></li>
                        <li><a href="#">Ota-onalar yig'ilishlari</a></li>
                        <li><a href="univers.php">Ota-onalar universiteti</a></li>
                    </ul>
                </li>
                <li class="<?php echo $link=='aloqa' ? 'current_page_item' : ''  ?>"><a href="aloqa.php" accesskey="5" title="">Aloqa</a></li>
            </ul>
        </div>

