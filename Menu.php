<?php

class Menu
{

   function SorovnomaPrint(){
       $sql_totel = mysql_query("SELECT * FROM `ip_sorovnoma`");
       try{
           $sql_nums = mysql_fetch_array($sql_totel);
           $TOTEL = $sql_nums['totel'] != null ? $sql_nums['totel'] : 1;
       }catch (ErrorException $e){
           $e->getMessage();
       }
       $sql = mysql_query("SELECT * FROM `sorovnoma` ORDER BY `id` ASC");
       try{
            $num = mysql_num_rows($sql);
            for($i = 0; $i < $num; $i++){
                $ms_id    = mysql_result($sql,$i,'id');
                $ms_field = mysql_result($sql,$i,'field');
                $ms_votes = mysql_result($sql,$i,'votes');
                $mass_1[$ms_id]    = $ms_id;
                $mass_2[$ms_id] = $ms_field;
                $mass_3[$ms_id] = $ms_votes;
                $mass_to[$ms_id]= ($ms_votes * 100)/($TOTEL);
            }
       }catch (ErrorException $e){
           print $e->getMessage();
       }
       //dfdf
       try {
           print"<li>
                     <b> $mass_2[1] </b> <span class='pull-right label label-primary' style='padding-top: 6px;'>$mass_3[1]</span>
                     <div class='my-progress'>
                           <div style='height: 18px; border-radius: 5px 0px 0px 5px; width: $mass_to[1]%; background: rgba(221, 95, 255, 1);'></div>
                    </div>
                 </li>
                 <li>
                     <b> $mass_2[2] </b> <span class='pull-right label label-primary' style='padding-top: 6px;'>$mass_3[2]</span>
                     <div class='my-progress'>
                          <div style='height: 18px; border-radius: 5px 0px 0px 5px; width: $mass_to[2]%; background: rgba(134, 16, 255, 0.76);'></div>
                    </div>
                 </li>
                 <li>
                     <b> $mass_2[3] </b> <span class='pull-right label label-primary' style='padding-top: 6px;'>$mass_3[3]</span>
                     <div class='my-progress'>
                          <div style='height: 18px; border-radius: 5px 0px 0px 5px; width: $mass_to[3]%; background: rgba(76, 225, 255, 0.76)'></div>
                    </div>
                 </li>
                  <li>
                     <b> $mass_2[4] </b> <span class='pull-right label label-primary' style='padding-top: 6px;'>$mass_3[4]</span>
                      <div class='my-progress'>
                          <div style='height: 18px; border-radius: 5px 0px 0px 5px; width: $mass_to[4]%; background: rgba(18, 186, 8, 0.9)'></div>
                      </div>
                  </li>
                  <li>
                     <b> $mass_2[5] </b> <span class='pull-right label label-primary' style='padding-top: 6px;'>$mass_3[5]</span>
                     <div class='my-progress'>
                          <div style='height: 18px; border-radius: 5px 0px 0px 5px; width: $mass_to[5]%; background: rgba(213, 255, 28, 0.76)'></div>
                      </div>
                  </li><li>
                     <b> $mass_2[6] </b> <span class='pull-right label label-primary' style='padding-top: 6px;'>$mass_3[6]</span>
                     <div class='my-progress'>
                          <div style='height: 18px; border-radius: 5px 0px 0px 5px; width: $mass_to[6]%; background: rgba(220, 45, 57, 0.98)'></div>
                      </div>
                 </li>
                 <li>
                    <a href='index.php'><button class='btn btn-primary btn-xs center-block' style='font-size: small; color: #f1f1f1' type='submit' name='result' value='2'>Qaytish</button></a>
                </li>
                <li></li>";
       }catch (ErrorException $e){
           print $e->getMessage();
       }
   }

   function Index(){

   }
   function Oqituvchi(){
      print "<div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <span class=\"text-danger\">||</span>
                    <span class=\"text-capitalize\">O'qituvchilarga</span>
                </div>
                <div class=\"panel-body\">
                    <ul class=\"style1\" style=\"font-family: Menlo\">
                        <li>
                            <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"teachers.php\">&nbsp; Ustozlar</a></b>
                        </li>
                        <li>
                            <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"rahbariyat.php\">&nbsp; Maktab rahbariyati</a></b>
                        </li>
                        <li>
                            <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"developments.php\">&nbsp; Dars Ishlanmalar</a></b>
                        </li>
                        <li>
                            <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"creative.php\">&nbsp; Ijodkor o'qituvchilar</a></b>
                        </li>
                        <li>
                            <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"vasiylik.php\">&nbsp; Vasiylik kengashi</a></b>
                        </li>
                    </ul>
                </div>
            </div>";
   }

    function MaktabVaTalim(){
        print" <div class=\"panel panel-primary\">
                  <div class=\"panel-heading\">
                      <span class=\"text-danger\">||</span>
                      <span class=\"text-capitalize\">Maktab va ta'lim</span>
                  </div>
                  <div class=\"panel-body\">
                      <ul class=\"style1\" style=\"font-family: Menlo\">
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"pasport.php\">&nbsp; Maktab pasporti</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"\">&nbsp; Maktab tarixi</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"awards.php\">&nbsp; Erishilgan yutuqlar</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"univers.php\">&nbsp; Fan oyliklari</a></b>
                          </li>
                      </ul>
                  </div>
              </div>";
    }


   function Oquvchi(){
      print" <div class=\"panel panel-primary\">
                  <div class=\"panel-heading\">
                      <span class=\"text-danger\">||</span>
                      <span class=\"text-capitalize\">O'quvchilarga</span>
                  </div>
                  <div class=\"panel-body\">
                      <ul class=\"style1\" style=\"font-family: Menlo\">
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"timetable.php\">&nbsp; Dars jadvali</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"bell.php\">&nbsp; Qo'ng'iroqlar jadvali</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"iqtidorli.php\">&nbsp; Iqtidorli o'quvchilar</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"course.php\">&nbsp; To'garaklar</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"kashfiyotlar.php\">&nbsp; Ixtiro va kashfiyotlar</a></b>
                          </li>
                      </ul>
                  </div>
              </div>";
   }
   function OtaOnalar(){
       print" <div class=\"panel panel-primary\">
                  <div class=\"panel-heading\">
                      <span class=\"text-danger\">||</span>
                      <span class=\"text-capitalize\">Ota-Onalarga</span>
                  </div>
                  <div class=\"panel-body\">
                      <ul class=\"style1\" style=\"font-family: Menlo\">
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"questions.php\">&nbsp; Savol va javoblar</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"tavfsiya.php\">&nbsp; Tavsiyalar</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"#\">&nbsp; Ota-onalar yig'ilishlari</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"univers.php\">&nbsp; Ota-onalar universiteti</a></b>
                          </li>
                      </ul>
                  </div>
              </div>";
   }
   function HikmatliSozlar(){
       print"<div class=\"panel panel-primary\">
				<div class=\"panel-heading text-center\" style=\"line-height: 7px;\">
					<b style=\"text-transform: uppercase;\">Hikmatli So'zlar</b>
				</div>
				<div class=\"panel-body\">
					<div style='text-align: center'>
                        Фарзандингизни тарбияламанг, ўзингизни тарбияланг - Фарзандингиз барибир ўзингизга ўхшаш бўлади
                    </div>
				</div>
			</div>";
   }

   function DonolarKitobi(){
       print"<div class='panel panel-body panel-primary' style='background: rgba(118, 247, 255, 0.97)'>
                Oz-ozdan o`rganib dono bo`lur
                Qatra-qatra yig`ilib daryo bo`lur.
            </div>";
       print"<div class='panel panel-body panel-primary' style='background: rgba(195, 253, 174, 0.97);'>
                Bilim barcha kulfatlarga qalqon.
            </div>";
       print"<div class='panel panel-body panel-primary' style='background-color: rgba(181, 192, 221, 0.97);'>
                Kitob insonga qanot bag`ishlaydi.
            </div>";
       print"<div class='panel panel-body panel-primary' style='background-color: rgba(181, 218, 221, 0.97);'>
                Odamlar o`qishdan to`xtashlari bilan fikrlashdan  ham to`xtaydilar.
            </div>";
       print"<div class='panel panel-body panel-primary' style='background: #9d9d9d;'>
               Aqlni charxlash uchun o`qish badantarbiyadek gap.
            </div>";
       print"<div class='panel panel-body panel-primary' style='background: #f5d895;'>
               Kitoblar jonsiz, ammo sodiq do`stlardir.
            </div>";
       print"<div class='panel panel-body panel-primary' style='background: salmon'>
              Qaysiki oilada kitob o`qilmasa u ma`nan to`laqonli oila bo`lolmaydi.
            </div>";
       print"<div class='panel panel-body panel-primary' style='background: #b2dba1;'>
             Ilimdan yaxshiroq xazina bo`lmas,
             Qo`lingdan kelguncha tera olsang bas.

            </div>";
   }



    function Courses(){
        $sql  = mysql_query("SELECT * FROM `course` ORDER BY `course`.`courseId` ASC");
        $nums = mysql_num_rows($sql);
        print"
         <div class=\"panel panel-primary\">
              <div class=\"panel-heading\">
                  <span class=\"text-danger\">||</span>
                  <span class=\"text-capitalize\">To'garaklar nomi</span>
              </div>
              <div class=\"panel-body\">
                  <ul class=\"style1\" style=\"font-family: Arial; font-size: 12px;\">";
        for($i = 0; $i < $nums; $i++) {
            $courseId = mysql_result($sql, $i, 'courseId');
            $courseName = mysql_result($sql, $i, 'courseName');
            print"
              <li>
                  <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"courseUsers.php?id=$courseId\">&nbsp; $courseName </a></b>
              </li>
            ";
        }
        print"
              </ul>
           </div>
        </div>";
    }

    function Sorovnoma(){
        print"<form action='addsorovnoma.php?action=sorovnoma' method='post'>";
            $sql  = mysql_query("SELECT * FROM `sorovnoma` ORDER BY `sorovnoma`.`id` ASC");
            $nums = mysql_num_rows($sql);
            for($i = 0; $i < $nums; $i++){
                $SorovId   = mysql_result($sql,$i,'id');
                $SorovName = mysql_result($sql,$i,'field');
                print "<li>
                            <input id=\"inp_$i\" type=\"radio\" name=\"sorov\" value=\"$SorovId\">
                            <label for=\"inp_$i\" style=\"margin-left: 10px;\">$SorovName</label>
                       </li>";
            }
            print"<li class='text-center' style='padding-top: 10px; padding-bottom: 10px;'>
                      <button class='btn btn-success btn-xs' type='submit' name='ovoz' value='1'>Ovoz berish</button>
                      <button class='btn btn-primary btn-xs' type='submit' name='result' value='2'>Natijalar</button>
                  </li>
        </form>";
    }

    function RahbariyatMenu(){
        print" <div class=\"panel panel-primary\">
                  <div class=\"panel-heading\">
                      <span class=\"text-danger\">||</span>
                      <span class=\"text-capitalize\">Maktab Rahbariyati</span>
                  </div>
                  <div class=\"panel-body\">
                      <ul class=\"style1\" style=\"font-family: Menlo\">
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"leadership.php?id=1\">&nbsp; Вилоят Жораевна</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"leadership.php?id=2\">&nbsp; Нигора Хусановна</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"leadership.php?id=3\">&nbsp; Нодира Кучкарходжаевна</a></b>
                          </li>
                      </ul>
                  </div>
              </div>";
    }

    function IjodkorOqituvchiar(){
         print" <div class=\"panel panel-primary\">
                  <div class=\"panel-heading\">
                      <span class=\"text-danger\">||</span>
                      <span class=\"text-capitalize\">Ijodkor O'qituvchilar</span>
                  </div>
                  <div class=\"panel-body\">
                      <ul class=\"style1\" style=\"font-family: Menlo\">
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"leadership.php?id=1\">&nbsp; Yakubova Dono Mirsobirovna</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"leadership.php?id=2\">&nbsp; Nabiyeva Maxsuma Latifovna</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"leadership.php?id=3\">&nbsp; Xaytqulova Yulduz Baxodirovna</a></b>
                          </li>
                      </ul>
                  </div>
              </div>";
    }
  function Ixtrolar(){
      $sql  = mysql_query("SELECT * FROM `ixtiro` ORDER BY `id` ASC");
      $nums = mysql_num_rows($sql);
      print"
         <div class=\"panel panel-primary\">
              <div class=\"panel-heading\">
                  <span class=\"text-danger\">||</span>
                  <span class=\"text-capitalize\">Ixtro va Kashfiyotlar</span>
              </div>
              <div class=\"panel-body\">
                  <ul class=\"style1\" style=\"font-family: Menlo\">";
      for($i = 0; $i < $nums; $i++) {
          $ixtiroId   = mysql_result($sql, $i, 'id');
          $ixtiroName = mysql_result($sql, $i, 'mavzu');
          print"
              <li>
                  <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"discoveries.php?id=$ixtiroId\">&nbsp; $ixtiroName </a></b>
              </li>
            ";
      }
      print"
              </ul>
           </div>
        </div>";
  }
  function KopOqilganYangilklar(){
      print"<div class=\"panel panel-primary\">
				<div class=\"panel-heading text-center\" style=\"line-height: 7px;\">
					<b style=\"text-transform: uppercase;\">Ko'p o'qilgan yangiliklar</b>
				</div>
				<div class=\"panel-body\">
<!--					For ishlatiladi-->
					<ul class=\"style1\">";
						$sqltext = mysql_query("select * from news ORDER BY reading DESC LIMIT 0, 5");
						$numtext = mysql_num_rows($sqltext);
						for($i = 0; $i < $numtext; $i++){
							$newId = mysql_result($sqltext,$i,'id');
							$newMavzu = mysql_result($sqltext,$i,'mavzu');
							$newRead = mysql_result($sqltext,$i,'reading');
                            if(strlen($newMavzu) > 45){
                                $newMavzu = substr($newMavzu, 0, 46)."...";
                            }
                    print"<li>
                        <a href=\"news.php?id=$newId\">$newMavzu</a>
                        <span class=\"label label-info pull-right\">$newRead</span>
                    </li>";
						}
                        print"</ul>
                        </div>
                </div>";
  }
 function SongiYangiliklar(){
     print"<div class=\"panel panel-primary\">
            <div class=\"panel-heading text-center\">
                <b style=\"text-transform: uppercase;\">So'ngi  yangiliklar</b>
            </div>
            <div class=\"panel-body\">
                <ul class=\"style1\">";
                    $sqltext = mysql_query("select * from news ORDER BY date_news DESC LIMIT 0, 5");
                    $numtext = mysql_num_rows($sqltext);
                    for($i = 0; $i < $numtext; $i++){
                        $newId = mysql_result($sqltext,$i,'id');
                        $newMavzu = mysql_result($sqltext,$i,'mavzu');
                        if(strlen($newMavzu) > 46){
                            $newMavzu = substr($newMavzu,0,46)."...";
                        }
                        $newRead = mysql_result($sqltext,$i,'reading');
                        print"<li>
                            <a href=\"?id=$newId \">$newMavzu </a>
                            <span class=\"label label-info pull-right\">$newRead</span>
                        </li>";
                    }
                print"</ul>
                </div>
            </div>";
 }

 function CurrentYearName(){
     print'<div style="width: 100%; text-align: center; padding-bottom: 10px;">
				<img src="images/2016-yil.jpg">
		   </div>';
 }

 function FoydaliManbalar(){
     print'<div class="panel panel-primary">
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
										<a href="http://www.press-service.uz">O\'ZBEKISTON RESPUBLIKASI PREZIDENT MATBUOT XIZMATI</a>
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
										<a href="http://www.gov.uz">O\'ZBEKISTON RESPUBLIKASI HUKUMAT PORTOLI</a>
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
										<a href="http://www.parliament.gov.uz">O\'ZBEKISTON RESPUBLIKASI OLIY MAJLISI</a>
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
										<a href="http://www.uzedu.uz">O\'ZBEKISTON RESPUBLIKASI XALQ TA\'LIMI VAZIRLIGI</a>
									</td>
								</tr>
							</table>
						</li>
					</ul>
				</div>
			</div>';
 }

    function Mojizalar(){
        print'<div class="panel panel-primary">
				<div class="panel-heading" style="line-height: 7px; text-align: center">
					<b style="text-transform: uppercase;">Dunyo Mo`jizalari</b>
				</div>
				<div class="panel-body">
					<a href="mojiza.php">
						<img src="'.URL_IMG.'mojiza.gif" width="100%">
					</a>
				</div>
			</div>';
    }

    function AsosoiyLeftMenu(){
        print" <div class=\"panel panel-primary\">
                 <div class=\"panel-heading\" style=\"line-height: 7px; text-align: center\">
					<b style=\"text-transform: uppercase;\">Interaktiv hizmatlar</b>
				</div>
                  <div class=\"panel-body\">
                      <ul class=\"style1\" style=\"font-family: Menlo\">
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"books.php\">&nbsp; Darsliklar</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"#\">&nbsp; Maqolalar</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"#\">&nbsp; Hikmatli so'zlar</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"videos.php\">&nbsp; Video darslar</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"#\">&nbsp; Online test</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"#\">&nbsp; Bitiruvchilar</a></b>
                          </li>
                      </ul>
                  </div>
              </div>";
    }
    function QoshimchaMalumotlar(){
        print" <div class=\"panel panel-primary\">
                 <div class=\"panel-heading\" style=\"line-height: 7px; text-align: center\">
					<b style=\"text-transform: uppercase;\">Qo'shimcha ma'lumotlar</b>
				</div>
                  <div class=\"panel-body\">
                      <ul class=\"style1\" style=\"font-family: Menlo\">
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"malumot.php\">&nbsp;Qo'shimcha Ma'lumot</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"symbols.php\">&nbsp; Davlat Ramzlari</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"state_awards.php\">&nbsp; Davlat Mukofotlari</a></b>
                          </li>
                          <li>
                              <span class=\"nuqta pull-left\"></span>&nbsp;&nbsp;<b> <a href=\"#\">&nbsp; Milliy Bayrmlar</a></b>
                          </li>
                      </ul>
                  </div>
              </div>";
    }
}