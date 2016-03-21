<?php
    include("connect_db.php");
    date_default_timezone_set("Asia/Tashkent");
    $time = time();
    $mavzu = mysql_real_escape_string($_POST['mavzu']);
    $shortnews = mysql_real_escape_string($_POST['shortnews']);
    $longnews = mysql_real_escape_string($_POST['longnews']);

    $target_dir = "../News/";
    $upload_name = "News/".$time. basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir .$time. basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//         echo "uploading your file....";
    } else {
//         echo "Sorry, there was an error uploading your file.";
    }
   $sql = "INSERT INTO `maktab`.`news` (`id`, `mavzu`, `img_link`, `short_news`, `long_news`, `date_news`)
                                        VALUES
                                        (NULL, '$mavzu', '$upload_name', '$shortnews', '$longnews', '$time')";
   mysql_query($sql);
   header("location: ../index.php");
   exit(0);
?>