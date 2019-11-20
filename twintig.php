<?php

$skip = array(19, 17, 15, 13, 11, 9, 7, 5, 3, 1);

for ($num = '20'; $num != '-1'; $num--) 

{
	if (in_array($num, $skip)) continue;
	echo $num. ' ' ;
}
