<?php

require_once ('DB.php');
require_once ('DB_functions.php');
require_once ('Region.php');

$success = connect('localhost', 'world', 'root', '');

$newRegion = new Region();
$regionNum = rand(1, 999);
$newRegion->name = 'Area ' . $regionNum;
$newRegion->slug = 'area_' . $regionNum;
$newRegion->insert();


echo('<pre>');
var_export($newRegion);
echo('</pre>');
