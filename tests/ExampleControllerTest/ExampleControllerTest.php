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
      ->method('getComplexThing')
      ->will($this->returnValue(['foo' => 'bar']));

    $exampleServiceMock->expects($this->any())
      ->method('createComplexThing')
      ->will($this->returnValue(['sna' => 'fu']));

    $this->app['example.repository'] = $exampleServiceMock;

  }

  public function testGetComplexThing() {

    $client = $this->createClient();

    $client->request('GET',
      'http://localhost:9091/complexthing/1000/22323');

    $this->assertEquals($client->getResponse()->getStatusCode(), 200);

    $json = $client->getResponse()->getContent();

    $data = object_to_array(json_decode($json));

    $this->assertEquals('bar', $data['foo']);

  }


  public function testCreateComplexThing() {

    $client = $this->createClient();

    $client->request('POST',
      'http://localhost:9091/complexthing/1000/22323');

    $this->assertEquals($client->getResponse()->getStatusCode(), 200);

    $json = $client->getResponse()->getContent();

    $data = object_to_array(json_decode($json));

    $this->assertEquals('fu', $data['sna']);

  }


} 