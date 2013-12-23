<?php
/**
 * Created by PhpStorm.
 * User: colshine
 * Date: 23/12/2013
 * Time: 6:39 PM
 */

namespace ExampleControllerTest;

require __DIR__ . '/../test_bootstrap.php';

use Base\TestCaseBase;

class ExampleControllerTest extends TestCaseBase {

  private $exampleServiceMock;

  public function setUp() {

    parent::setUp();

    $exampleServiceMock = $this->getMockBuilder('Services\ExampleService')->
      disableOriginalConstructor()->getMock();

    $exampleServiceMock->expects($this->any())
      ->method('getPrivateCompetitionDetails')
      ->will($this->returnValue($this->privateCompDetails));

    $this->app['example.service'] = $exampleServiceMock;

  }

  public function testGetComplexThing() {

    $client = $this->createClient();

    $client->request('GET',
      '/tipping/private-comps/details');

    $this->assertEquals($client->getResponse()->getStatusCode(), 200);

    $data = object_to_array(json_decode($client->getResponse()->getContent()));

    $this->assertEquals(31561, $data['details'][0]['id']);

  }


} 