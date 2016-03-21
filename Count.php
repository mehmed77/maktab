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
}

?>

