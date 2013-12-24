<?php
/**
 * Created by PhpStorm.
 * User: colshine
 * Date: 23/12/2013
 * Time: 6:26 PM
 */

namespace Services;

use Exception;

class ExampleService {

  protected $complex;
  protected $constructor;
  protected $args;

  public function __construct($complex, $constructor, $args = true){
    $this->complex = $complex;
    $this->constructor = $constructor;
    $this->args = $args;
  }

  public function createComplexThing($part1,$part2){
    //call into repo/db
    //complex backend service stuff
  }

  public function getComplexThing($id){
    // construct complex thing from repo / db
  }

} 