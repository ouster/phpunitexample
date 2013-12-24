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

  public function __construct($complex, $constructor, $args = true) {
    $this->complex = $complex;
    $this->constructor = $constructor;
    $this->args = $args;
  }

  public function createComplexThing($id, $partNo) {

    //TODO create complexThing

    return $this->getComplexThing($id, $partNo);
  }

  public function getComplexThing($id, $partNo, $filter = null) {

    return ['id' => [$id => [1, 2, 3, 4, 5]],
      'partNo' => [$partNo => ['a', 'b', 'c', 'd']],
      'serial' => 1];
  }

} 