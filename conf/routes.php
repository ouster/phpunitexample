<?php
/**
 * Created by PhpStorm.
 * User: colshine
 * Date: 23/12/2013
 * Time: 7:07 PM
 */

//$app->get('/complexThing/{part1]/{part2}', 'example.controller:getComplexThing');
$app->get('/complexThing', 'example.controller:getComplexThing');