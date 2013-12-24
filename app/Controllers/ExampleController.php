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

  public function getComplexThing(Request $request, Application $app) {

    $queryParam = $request->get('part3');

    return $app->json($this->repo->getComplexThing(null, null, $queryParam), 200);
  }

} 