<?php

namespace WAEasyAPI\Api\Test;

include 'WAEasyAPI.php';

use WAEasyAPI\Api\Api;

class WAEasyAPITest extends \PHPUnit_Framework_TestCase
{
    function setUp()
    {
        $this->api = new Api($_SERVER['ACC_ID'], $_SERVER['ACC_SECRET']);
    }

    public function testApiAccess()
    {
		$this->assertInstanceOf('WAEasyAPI\Api\Api', $this->api);
	}

    public function testRequests()
	{
		$this->assertTrue(class_exists('\Requests'));
	}
}