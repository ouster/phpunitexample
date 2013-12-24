<?php
/**
 * Created by PhpStorm.
 * User: colshine
 * Date: 23/12/2013
 * Time: 7:07 PM
 */

$app->get('/complexthing/{id}/{partNo}', 'example.controller:getComplexThing');

$app->post('/complexthing/{id}/{partNo}', 'example.controller:createComplexThing');
