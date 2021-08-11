<?php

// edited
add_filter( 'query_vars', 'addnew_query_vars', 10, 1 );
function addnew_query_vars($vars)
{   
    $vars[] = 'var1'; // var1 is the name of variable you want to add       
    return $vars;
}

$gg1 = $_GET['var1'];
$gg2 = $_GET['var2'];
$gg3 = $_GET['var3'];
$forward = do_shortcode('[products tag="'.$gg1.', '.$gg2.', '.$gg3.' "tag_operator="and"]');

// edited
// woocommerce filter by tags [products tag="suomi, kadet" tag_operator="and"]

