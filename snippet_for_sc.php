<?php


$g1 = $_GET['var1'];
$gg1 = filter_var($g1, FILTER_SANITIZE_ADD_SLASHES);
$g2 = $_GET['var2'];
$gg2 = filter_var($g2, FILTER_SANITIZE_ADD_SLASHES);
$g3 = $_GET['var3'];
$gg3 = filter_var($g3, FILTER_SANITIZE_ADD_SLASHES);
// debug
// echo 'g1= '.$g1.'<br>';
// echo 'gg1= '.$gg1.'<br>';
// echo 'g1= '.$g2.'<br>';
// echo 'gg1= '.$gg2.'<br>';
// echo 'g1= '.$g3.'<br>';
// echo 'gg1= '.$gg3.'<br>';
echo '[products tag="'.$gg1.','.$gg2.','.$gg3.'" tag_operator="AND"]';
?>



<?php
$gg1 = $_GET['var1'];
$gg2 = $_GET['var2'];
$gg3 = $_GET['var3'];
echo '[products tag="'.$gg1.','.$gg2.','.$gg3.'" tag_operator="AND"]';
?>
