<?php
	$link="home";
	include "header.php";
	require "connect_db.php";
	require "Menu.php";
	$left_menu = new Menu();
?>
<style>
	#my-table{
		background: #f4fff5;
		font-size: 14px;
		box-shadow: inset 0px 0px 1px 5px #f8f9ff, inset 0px 0px 0px 0px #f8f8f8, 0px 0px 2px 2px #f2f8ff;
		border-radius: 0px 0px 5px 5px;
	}
</style>
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
				<div class="panel-heading text-center" style="line-height: 7px;">
					<b style="text-transform: uppercase;">maktabimiz formasi</b>
				</div>
				<div class="panel-body" style="height: 370px;">
					<script type="text/javascript"> //230 340
						new fadeshow(fadeimages, 240, 350, 1, 2500, 1, "R")
					</script>
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading text-center" style="line-height: 7px;">
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
			<div class="panel panel-primary">
				<div class="panel-heading text-center" style="line-height: 7px;">
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
		</div>
		<!-- LEFT MENU END -->
		<!-- CENTER  MENU  -->
		<div class="col-xs-6">
			<div class="col-xs-12">
				<span id="content" style="line-height: 2px;"></span>
			</div>
			<div class="h2 text-primary text-center" style="border-bottom: 1px dotted; margin-bottom: 10px;">
				Saytimiz yangiliklari
			</div>
				<?php
					$sql = mysql_query("select * from news ORDER BY date_news DESC LIMIT 0, 10");
					$rows = mysql_num_rows($sql);
					for($i = 0; $i < $rows; $i++){
						$newsId      = mysql_result($sql,$i,'id');
						$newsMavzu   = mysql_result($sql,$i,'mavzu');
						$newsImgLink = mysql_result($sql,$i,'img_link');
						$newsShort   = substr(mysql_result($sql,$i,'short_news'),0,500)."...";
						$newsRead    = mysql_result($sql,$i,'reading');
						$newsDate    = mysql_result($sql,$i,'date_news');
						$newsDate    = date("d.m.Y",$newsDate);
						$newAuthor   = mysql_result($sql,$i,'author');
						$newsLike    = mysql_result($sql,$i,'LikeCount');
				?>

						<div style="width: 100%; padding: 0; margin-bottom: 10px;">
							<!--    <div class="my-panel-body">-->
							<br>
								<table id="my-table" class="table table-bordered" width="100%">
									<tr>
										<td colspan="2">
											<table width="100%">
												<tr>
													<td width="90%"><b style="float: left; left: 0px;"><?php print $newsMavzu; ?></b></td>
													<td>
														<button onclick="newsLike.add(<?php print $newsId; ?>)" class="btn btn-default pull-right h3">
															<span class="text-primary glyphicon glyphicon-thumbs-up"></span>
														</button>
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td width="140" height="140">
											<img width="100%" height="100%" src="<?php print $newsImgLink; ?>">
										</td>
										<td style="text-align: justify;">
											<?php print $newsShort; ?>
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<table width="100%" border="0" cellpadding="0" cellspacing="0">
												<tr>
													<td>
														<span class="glyphicon glyphicon-user"></span>
														<?php
														if($newAuthor == "" || $newAuthor == null){
															print "Administrator";
														}else{
															print $newAuthor;
														};
														?>
													</td>
													<td width="130">
														<span class="glyphicon glyphicon-time"></span>
														<?php print $newsDate; ?>
													</td>
													<td width="60">
														<span class="glyphicon glyphicon-eye-open"></span>
														<?php print $newsRead; ?>
													</td>
													<td width="60">
														<span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;
														<span id="LikeCount">
															<span><?php echo $newsLike; ?></span>
														</span>
													</td>
													<td width="70">
														<a href="news.php?id=<?php print $newsId; ?>">
															<button class="pull-right btn btn-primary btn-sm text-justify"> &nbsp; Batafsil &nbsp; </button>
														</a>
													</td>
												</tr>
											</table>

										</td>
									</tr>
								</table>
						</div>
			<?php } ?>
		</div>
		<!-- CENTER  MENU END -->

		<!-- RIGHT  MENU -->
		<div class="col-xs-3">
			<div class="panel panel-primary">
				<div class="panel-heading text-center" style="line-height: 7px;">
					<b style="text-transform: uppercase;">Hikmatli So'zlar</b>
				</div>
				<div class="panel-body">
					<?php
					  $left_menu->HikmatliSozlar();
					?>
				</div>
			</div>
			<div style="width: 100%; text-align: center; padding-bottom: 10px;">
				<img src="images/2016-yil.jpg">
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading text-center" style="line-height: 7px;">
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
				<div class="panel-heading" style="line-height: 7px; text-align: center">
					<b style="text-transform: uppercase;">Dunyo Mo'jizalari</b>
				</div>
				<div class="panel-body">
					<a href="mojiza.php">
						<img src="<?php print URL_IMG;?>mojiza.gif" width="100%">
					</a>
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
	 </div>
<?php
	include ('footer.php');
?>
