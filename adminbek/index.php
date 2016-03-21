<?php
   include("header.php");
?>
<script>
    function search(str){
        var  xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("demo").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","search.php?q="+str,true);
        xmlhttp.send();
    }
</script>
<div id="banner" style="width: 100%; background: #428bca; font-size: 45px; padding-top: 16px; padding-left: 50px;  border-bottom: 5px double #0078D1; height: 100px;">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">Administrator uchun maxsus</span>
</div>

<br>
<div class="col-xs-12">
    <table class="table table-bordered">
        <thead style="background: rgba(92, 153, 244, 0.8);">
            <tr>
                <th class="text-center col-xs-1">N</th>
                <th class="text-center col-xs-10">Izoh</th>
                <th class="text-center col-xs-1">Kirish</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <td>1</td>
                <td>Yangi domla qo'shish</td>
                <td>
                    <a href="addteacher.php">
                        <button class="btn btn-sm btn-primary">Kirish</button>
                    </a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Mehnat Faoliyatini qo'shish</td>
                <td>
                    <a href="index1.php">
                        <button class="btn btn-sm btn-primary">Kirish</button>
                    </a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bosh Menyuga Yangiliklarni qo'shish</td>
                <td>
                    <a href="addIndexNews.php">
                        <button class="btn btn-sm btn-primary">Kirish</button>
                    </a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Qo'ngiroqlar Jadvalini To'ldirish</td>
                <td>
                    <a href="addzvanoq.php">
                        <button class="btn btn-sm btn-primary">Kirish</button>
                    </a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td><a href="class.php">Siniflar ro'yxati</a> &nbsp; &nbsp; Yangi sinf qo'shish</td>
                <td>
                    <a href="addclass.php">
                        <button class="btn btn-sm btn-primary">Kirish</button>
                    </a>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Iqtidorli o'quvchi qo'shish</td>
                <td>
                    <a href="addIqtidorli.php">
                        <button class="btn btn-sm btn-primary">Kirish</button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php
  include("../footer.php");
?>