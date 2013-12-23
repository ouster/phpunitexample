<?php
/**
 * Created by PhpStorm.
 * User: colshine
 * Date: 17/12/2013
 * Time: 12:16 PM
 */

namespace Base;

use Silex\WebTestCase;

class TestCaseBase extends WebTestCase {

  public function createApplication() {
    $app_env = 'test';
    $app = require __DIR__ . '/../../web/index.php';

    return $app;
  }

  public function setUp() {

    parent::setUp();

  }

  protected function tearDown() {
  }

}