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
?>

