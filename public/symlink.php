<?php

$target = '/home/daam/store/storage/app/public';
$shortcut = '/home/daam/public_html/store/storage';
symlink($target, $shortcut);

echo "LInk DONE !";

?>