<?php
/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 26.03.2016
 * Time: 1:42
 */
if(isset($_POST['salom']) && $_POST['salom']){
    print $_POST['salom'];
}
?>
<html>
<head>

<script src="ckeditor/ckeditor.js"></script>
</head>
<body>
<form action="ckeditor.php" method="post">
<textarea class="ckeditor" id="ckeditor" name="salom">

</textarea>
    <button type="submit">Ok</button>
</form>

</body>
</html>
