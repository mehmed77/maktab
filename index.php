<?php
	$link="home";
	require "header.php";
	require "connect_db.php";
	require "Menu.php";
	$left_menu = new Menu();
?>

	<div id="banner">
		<img src="images/maktab.jpg" width="1150" height="300" alt="" />
	</div>
	<div class="col-xs-12">
		<!-- LEFT MENU -->
		<div class="col-xs-3">
			<?php
			$left_menu->KopOqilganYangilklar();
			?>
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<b style="text-transform: uppercase;">maktabimiz formasi</b>
				</div>
				<div class="panel-body" style="height: 370px;">
					<script type="text/javascript"> //230 340
						new fadeshow(fadeimages, 240, 350, 1, 2500, 1, "R")
					</script>
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<b style="text-transform: uppercase;">qo'shimcha ma'lumot</b>
				</div>
				<div style="font-family: Arial" class="panel-body">
					<ul class="style2">
						<li class="first" style="text-align: justify">
							<p><b>Maktabda jami: 447 o'quvchi</b></p>
							<p>O'g'il bolalar soni: 218</p>
							Qiz bolalar soni: 229
						</li>
						<li>
							<p><b>Maktabda jami: 38 o'qituvchi</b></p>
							<p>I toifalilar soni: 6 </p>
							<p>II toifalilar soni: 20 </p>
							<p>Mutaxassislar soni: 11 </p>
							O'rta maxsuslar soni: 1
						</li>
						<li>
							<p><b>Jami sinf xonalari soni: 19</b></p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- LEFT MENU END -->
		<!-- CENTER  MENU  -->
		<div class="col-xs-6">
			<div class="h2 text-primary"> Yangiliklar </div>
				<?php
					$sql = mysql_query("select * from news ORDER BY date_news DESC LIMIT 0, 10");
					$rows = mysql_num_rows($sql);
					for($i = 0; $i < $rows; $i++){
						$newsId      = mysql_result($sql,$i,'id');
						$newsMavzu   = mysql_result($sql,$i,'mavzu');
						$newsImgLink = mysql_result($sql,$i,'img_link');
						$newsShort   = substr(mysql_result($sql,$i,'short_news'),0,200)."...";
						$newsRead    = mysql_result($sql,$i,'reading');
						$newsDate    = mysql_result($sql,$i,'date_news');
						$newsDate    = date("d.m.Y  H:i",$newsDate);
				?>
				<div class="news">
					<div class="pull-left" style=" width: 130px; height: 130px;">
						<img class="img-thumbnail" src="<?php print $newsImgLink; ?>" width="100%" height="100%">
					</div>
					<div style="margin-left: 140px; max-height: 100px;">
						<span style="font-family: Consolas"><?php print $newsDate; ?></span><br>
						<b style="font-size: 16px;"><?php print $newsMavzu; ?></b> <br>
						<?php print $newsShort; ?>
					</div>
					<div style="margin-top: 5px;" class="pull-right">
						<div class="news-form">
							<b style="font-size: 16px;">O'qilgan:</b>
							<b style="color: #000; margin-left: 5px; font-size: larger"><?php print $newsRead; ?></b>
						</div>
						&nbsp;
							<a style="color: white" href="news.php?id=<?php print $newsId; ?>">
								<div class="btn btn-info btn-sm">
									Batafsil
								</div>
							</a>
					</div>
				</div>
			<?php } ?>
		</div>
		<!-- CENTER  MENU END -->

		<!-- RIGHT  MENU -->
		<div class="col-xs-3">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<b style="text-transform: uppercase;">E'lon</b>
				</div>
				<div class="panel-body">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consequuntur ea earum error eum ex excepturi fugit harum hic illum, ipsam iste modi molestias nam perspiciatis porro recusandae totam veritatis!
					</p>
				</div>
			</div>
			<div class="panel panel-body panel-primary">
				<?php
				  $left_menu->HikmatliSozlar();
				?>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<b style="text-transform: uppercase;">Foydali manbalar</b>
				</div>
				<div class="panel-body">
					<ul class="style2">
						<li class="first">
							<table>
								<tr>
									<td>
										<img src="images/matbuot.gif">
									</td>
									<td style="padding-left: 3px; font-size: small;">
										<a href="http://www.press-service.uz">O'ZBEKISTON RESPUBLIKASI PREZIDENT MATBUOT XIZMATI</a>
									</td>
								</tr>
							</table>
						</li>
						<li>
							<table>
								<tr>
									<td>
										<img src="images/gerb.gif">
									</td>
									<td style="padding-left: 3px; font-size: small;">
										<a href="http://www.gov.uz">O'ZBEKISTON RESPUBLIKASI HUKUMAT PORTOLI</a>
									</td>
								</tr>
							</table>
						</li>
						<li>
							<table>
								<tr>
									<td>
										<img src="images/senat.jpg">
									</td>
									<td style="padding-left: 3px; font-size: small;">
										<a href="http://www.parliament.gov.uz">O'ZBEKISTON RESPUBLIKASI OLIY MAJLISI</a>
									</td>
								</tr>
							</table>
						</li>
						<li>
							<table>
								<tr>
									<td>
										<img src="images/gerb.gif">
									</td>
									<td style="padding-left: 3px; font-size: small;">
										<a href="http://www.uzedu.uz">O'ZBEKISTON RESPUBLIKASI XALQ TA'LIMI VAZIRLIGI</a>
									</td>
								</tr>
							</table>
						</li>
					</ul>
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<b style="text-transform: uppercase;">Online so'rovnoma</b>
				</div>
				<div class="panel-body">
					<ul class="style5">
						<li style="text-transform: uppercase; color:red; font-family: Consolas; text-align: center;">
							<b>Qaysi fan sizga yoqadi?</b>
						</li>
						<?php
							if(isset($_GET['s']) && $_GET['s'] == 1){
								$left_menu->SorovnomaPrint();
							}else{
								$left_menu->Sorovnoma();
							}
						?>
					</ul>
				</div>
			</div>
		<!-- RIGHT  MENU END -->
		</div>
  </div>
 <div class="col-xs-12">
		<marquee style="250px; border-bottom: 1px dotted; border-top: 1px dotted">
			<img src="marquee/9.jpg" class="img-thumbnail" height="100%" width="200px;">
			<img src="marquee/1.jpg" class="img-thumbnail carousel" height="100%" width="200px;">
			<img src="marquee/2.jpg" class="img-thumbnail" height="100%" width="200px;">
			<img src="marquee/3.jpg" class="img-thumbnail" height="100%" width="200px;">
			<img src="marquee/4.jpg" class="img-thumbnail" height="100%" width="200px;">
			<img src="marquee/5.jpg" class="img-thumbnail" height="100%" width="200px;">
			<img src="marquee/6.jpg" class="img-thumbnail" height="100%" width="200px;">
			<img src="marquee/7.jpg" class="img-thumbnail" height="100%" width="200px;">
			<img src="marquee/8.jpg" class="img-thumbnail" height="100%" width="200px;">
			<img src="marquee/10.jpg" class="img-thumbnail" height="100%" width="200px;">
		</marquee>
<?php
	include ('footer.php');
?>
