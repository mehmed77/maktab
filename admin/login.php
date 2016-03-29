<?php
    include("session.php");

    if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
        header("location: index.php");
        exit(0);
    }
   if(isset($_GET['action']) && $_GET['action'] == "login"){
       if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']){
           header("location: index.php");
           exit(0);
       }
        $login_ = $_POST['login'];
        $parol_ = md5($_POST['parol']);
        if($login_ == login && parol == $parol_){
            $_SESSION['loggedIn'] = true;
        }

   }
    include "style.php";
    include "connect_db.php";

?>
<div id="banner" style="width: 100%; background: #428bca; font-size: 45px; padding-top: 16px; padding-left: 50px;  border-bottom: 5px double #0078D1; height: 100px;">
    <span class="text-danger">||</span>
    <span style="text-transform: uppercase; font-family: Consolas;">Administrator bo'limi</span>
</div>
<br>
<div style="margin-right: auto; margin-left: auto; width: 400px;">
    <form action="login.php?action=login" method="post">
            <div style="width: 400px;">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <b style="color: #000;">Administrator bo'limiga kirish</b>
                    </div>
                    <div class="panel-body">
                        <table class="table" width="100%">
                            <tr>
                                <td style="width: 80px; text-align: right">Login: </td>
                                <td>
                                    <input type="text" class="form-control" name="login">
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 80px; text-align: right">Parol: </td>
                                <td>
                                    <input type="password" class="form-control" name="parol">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <br/>
                                    <button class="center-block btn btn-primary" type="submit">Tasdiqlash</button>
                                </td>
                            </tr>
                        </table>
                    </div>
            </div>
    </form>
</div>

