<?php
    include("connect_db.php");
    $fio = mysql_real_escape_string($_POST['fio']);
    $more = mysql_real_escape_string($_POST['more']);

    $target_dir = "../images/iqtidorli/";
    $upload_name = "images/iqtidorli/". basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//         echo "uploading your file....";
    } else {
//         echo "Sorry, there was an error uploading your file.";
    }
   $sql = "INSERT INTO `maktab`.`iqtidorli` (`id`, `fio`, `photo`, `more`)
                                        VALUES
                                        (NULL, '$fio', '$upload_name', '$more')";
   mysql_query($sql);
   header("location: ../iqtidorli.php");
   exit(0);
?>