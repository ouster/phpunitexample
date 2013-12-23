<?php
/**
 * Created by PhpStorm.
 * User: colshine
 * Date: 23/12/2013
 * Time: 6:26 PM
 */

namespace Controllers;

use Silex\Application;

class ExampleController {

  protected $repo;

  public function __construct($repo){
    $this->repo = $repo;
  }

  public function getComplexThing($part1, $part2, Request $request, Application $app) {

    $queryParam = $request->get('part3');

    return $app->json($this->repo->getComplexThing($part1, $part2, $queryParam), 200);
  }

} 