<?php
/**
 * Created by PhpStorm.
 * User: colshine
 * Date: 23/12/2013
 * Time: 6:26 PM
 */

namespace Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class ExampleController {

  protected $repo;

  public function __construct($repo){
    $this->repo = $repo;
  }

  public function getComplexThing($id, $partNo, Request $request, Application $app) {

    return $app->json($this->repo->getComplexThing($id, $partNo), 200);
  }

  public function createComplexThing($id, $partNo, Request $request, Application $app) {

    return $app->json($this->repo->createComplexThing($id, $partNo), 200);
  }
} 