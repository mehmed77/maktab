<?php
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
//    print"<script> alert($news_id)</script>";
    $json = array();
    $json['success'] = sprintf('text-succes',null,null);
    $json['total'] = sprintf(2);
    echo json_encode($json);
}
?>

