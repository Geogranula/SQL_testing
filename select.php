<?php

require_once ('DB.php');
require_once ('DB_functions.php');
require_once ('Region.php');

$success = connect('localhost', 'world', 'root', '');

function getAreasByFirstDigit($number)
{
    $query = "
    SELECT * FROM `regions`
    WHERE `name` LIKE ?
    ORDER BY `name` DESC
    LIMIT 5
    ";

    return select($query, ['Area '.'%'], 'Region');
//    @TODO
}

$listOfResults = getAreasByFirstDigit(5);

echo('<pre>');
var_export($listOfResults);
echo('</pre>');
