<?php
$link = "otaona";
include("header.php");
include("Menu.php");
$left_menu = new Menu();
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<div class="menu-header">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">Ota-onalar universiteti</span>
</div>
<br>
<div class="col-xs-12">
    <div class="col-xs-9">
        <div class="panel panel-body panel-primary">
            <table class="table table-bordered table-striped">
                <tr>
                    <th class="text-center" colspan="4">Қибрай тумани 6- умумтаълим мактабида ота-оналар университетлари фаолиятини такомиллаштириш бўйича
                        чора- тадбирлар режаси
                    </th>
                </tr>
                <tr>
                    <th class="text-center col-xs-1">№</th>
                    <th class="text-center col-xs-5">Бажариладиган ишлар мазмуни</th>
                    <th class="text-center col-xs-3">Муддати</th>
                    <th class="text-center col-xs-3">Масъул</th>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td>Умумий ота-оналар мажлисида ота-оналар университети тўғрисида низомни ишлаб чиқиш</td>
                    <td class="text-center">Ноябр</td>
                    <td class="text-center">В.Ж.Акромова,<br> Н.Магдалиева</td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td>Ўқувчилардан ёш хусусиятлариданкелиб чиқиб мунтазам равишда ота-оналарга мутахасислар иштирокида педагогик – психологик тушунча , маслахат ва кўрсатмалар бериш</td>
                    <td class="text-center">Декабр</td>
                    <td class="text-center">В.Эрметова,<br> Н.Магдалиева</td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td>Бпаркамол авлод тарбиялашда оила, махалла, таълим муассасаси хамкорлиги концепциясини хаётга изчил татбиқ этиш</td>
                    <td class="text-center">Январ</td>
                    <td class="text-center">Махалла маслахатчилари,<br> фаоллари</td>
                </tr>
                <tr>
                    <td class="text-center">4</td>
                    <td>Ёш оилалар билан ишлаш. Уларга фарзанд ва унинг тарбияси ҳақида педагогик, тиббий, психологик тушунча ва маслаҳатлар бериш бўйича ўқувлар ўтказиш</td>
                    <td class="text-center">Феврал</td>
                    <td class="text-center">Д.Абдуқодирова</td>
                </tr>
                <tr>
                    <td class="text-center">5</td>
                    <td>Ўқувчи- ёшларни оилавий ҳаётга тайёрлаш ишларини ташкиллаштиришда ҳамкорлик қилиш</td>
                    <td class="text-center">Март</td>
                    <td class="text-center">Н.Магдалиева махалла диний маслахатчиси</td>
                </tr>
                <tr>
                    <td class="text-center">6</td>
                    <td>Ўқувчиларнинг маънавий- маърифий, жисмоний тарбияси учун оилада дарсхона ва бошқа шарт-шароитлар яратиш</td>
                    <td class="text-center">Апрел</td>
                    <td class="text-center">Н.Магдалиева</td>
                </tr>
                <tr>
                    <td class="text-center">7</td>
                    <td>Оилада ҳуқуқий тарбияни яхшилаш, оила аъзоларининг ўз ҳуқуқ ва бурчларини англаб етишлари ва уларга риоя қилишларини таъминлаш</td>
                    <td class="text-center">Май</td>
                    <td class="text-center">Д.Якубова</td>
                </tr>
                <tr>
                    <td class="text-center">8</td>
                    <td>Болаларни ота-оналар орқали бўш вақтларини педагогик нуқтаи- назардан келиб чиқиб, мазмунли ва унумли ташкил қилиш ҳамда қўшимча тўгаракларга йўналтириш</td>
                    <td class="text-center">Август</td>
                    <td class="text-center">Н.Магдалиева</td>
                </tr>
                <tr>
                    <td class="text-center">9</td>
                    <td>Таълим тизимида амалга оширилаётган ислоҳатлар мазмуни билан ота-оналарни ўз вақтида ҳабардор этиб бориш</td>
                    <td class="text-center">Сентябр</td>
                    <td class="text-center">Н.Магдалиева</td>
                </tr>
                <tr>
                    <td class="text-center">10</td>
                    <td>Ота-оналар университети машғулотларини ўтказиш (барча ёшдаги ота-оналарнинг долзарб вазифалари ва муаммолари қамраб олинади)</td>
                    <td class="text-center">Ҳар ойда 1 марта</td>
                    <td class="text-center">Б.Рахмонжонова,<br> Д.Якубова</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-xs-3">
        <?php
         $left_menu->OtaOnalar();
        ?>
    </div>
</div>
<?php
require("footer.php");
?>