<?php
$targetFolder = $_SERVER['DOCUMENT_ROOT'].'/store/storage/app/public';
$linkFolder = $_SERVER['DOCUMENT_ROOT'].'/public_html/store/storage';
symlink($targetFolder,$linkFolder);
echo 'Symlink completed'
?>