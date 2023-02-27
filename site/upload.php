<?php
if (is_array($_FILES)) {
    if (is_uploaded_file($_FILES['images']['tmp_name'][0])) {
        $sourcePath = $_FILES['images']['tmp_name'][0];
        $targetPath = "images/" . $_FILES['images']['name'][0];
        if (move_uploaded_file($sourcePath, $targetPath)) {
           echo $targetPath;
        }
    }
}
?>