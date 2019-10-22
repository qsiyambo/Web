#!/usr/bin/php
<?php

include("ft_split.php");
$tab = ft_split("tuesday 12 Novembre 2013 12:02:21");
$tab2 = ["monday", "tuesday", "wednesday"];
print_r($tab);
//if (preg_match("/\b$tab2[1]\b/i", $tab[0], $match)) 
//	echo "Matched!"; 
//else
//   echo "not matched"; 
//if (preg_match("/[0-3][0-9]/", $tab[1], $match)) 
//	echo "Matched!"; 
//else
//   echo "not matched"; 
if (preg_match("/\d\d:\d\d:\d\d/", $tab[4], $match)) 
	echo "Matched!"; 
else
	echo "not matched"; 
//echo(strtotime("Tue, 12 November 2013 12:02:21"));
?>