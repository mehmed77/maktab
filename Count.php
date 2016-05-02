<?php
include("connect_db.php");
class Count {
    function IndexNewsCount($id=false){
        $sql = "UPDATE `news` SET `reading`= `reading`+1 WHERE `id` = $id";
        mysql_query($sql);
        return 0;
    }
    function CourseCount($id=false){
        $sql = "UPDATE `course` SET `courseCount`= `courseCount` + 1 WHERE `courseId` = $id";
        mysql_query($sql);
        return 0;
    }
    function IxtroCount($id=false){
        $sql = "UPDATE `ixtiro` SET `tahrir`= `tahrir` + 1 WHERE `id` = $id";
        mysql_query($sql);
        return 0;
    }
    function IdexNewsLikeCount($id=false){
        print $id;
    }
    function MojizaCount($id=false){
        $sql = "UPDATE `miracle` SET `reading`= `reading` + 1 WHERE `id` = $id";
        mysql_query($sql);
        return 0;
    }
    function VideoCount($id=false){
        $sql = "UPDATE `video_darslik` SET `reading`= `reading` + 1 WHERE `id` = $id";
        mysql_query($sql);
        return 0;
    }
}

if(isset($_POST['news_id']) && is_numeric($_POST['news_id'])) {
    $news_id = $_POST['news_id'];
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $sql = mysql_query("select * from `news` where `id` = $news_id");
    $rows = mysql_fetch_array($sql);
    $userIp = $rows['UserIp'];
    $count  = $rows['LikeCount'];
    $json = array();
    if(!strstr($userIp, $user_ip)){
        $ip = ":".$user_ip.":";
        mysql_query("update `news` set UserIp = CONCAT(UserIp,'$ip'), LikeCount = LikeCount + 1 where `id` = $news_id");
        $count++;
        $json['success'] = sprintf('  Sizga yangilik yoqqanidan hursandmiz!!!',null,null);
    }else{
        $json['danger'] = sprintf('  Siz yangilikni belgilab bo`lgansiz!!!',null,null);
    }
    $json['total'] = sprintf($count);
    echo json_encode($json);
}

if(isset($_GET['mojiza_id']) && is_numeric($_GET['mojiza_id'])){
    $id = $_GET['mojiza_id'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $sqltxt = mysql_query("select * from `mojiza` where id = $id");
    $ip_adress = mysql_result($sqltxt,0,'ip_adress');
//    print $ip_addres."    ".$ip;
    if(!strstr($ip_adress, $ip)){
        $ip = ':'.$ip.':';
        $sql = "UPDATE `mojiza` SET ip_adress = CONCAT(ip_adress,'$ip'), LikeCount = LikeCount + 1 WHERE `id` = $id";
//        print $sql;
        mysql_query($sql);
    }
    header("location: mojiza.php");
    exit(0);
}

if(isset($_GET['video_id']) && is_numeric($_GET['video_id'])){
    $id = $_GET['video_id'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $sqltxt = mysql_query("select * from `video_darslik` where id = $id");
    $ip_adress = mysql_result($sqltxt,0,'ip_adress');
//    print $ip_addres."    ".$ip;
    if(!strstr($ip_adress, $ip)){
        $ip = ':'.$ip.':';
        $sql = "UPDATE `video_darslik` SET ip_adress = CONCAT(ip_adress,'$ip'), LikeCount = LikeCount + 1 WHERE `id` = $id";
//        print $sql;
        mysql_query($sql);
    }
    header("location: videos.php");
    exit(0);
}
?>

