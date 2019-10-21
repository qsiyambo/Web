#!/usr/bin/php
<?php

function ft_split($str)
{   
    $my_tab = preg_split("/[\s,]+/", $str);
    sort($my_tab);
    return $my_tab;
}

?>