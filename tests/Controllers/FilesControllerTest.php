<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Tests;

use Pipedrive\APIException;
use Pipedrive\Exceptions;
use Pipedrive\APIHelper;
use Pipedrive\Models;

class FilesControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Pipedrive\Controllers\FilesController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass()
    {
        $client = new \Pipedrive\Client();
        self::$controller = $client->getFiles();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Returns data about all files.
     */
    public function testTestGetAllFiles()
    {
        // Parameters for the API call
        $input = array();
        $input['start'] = 0;
        $input['limit'] = null;
        $input['includeDeletedFiles'] = null;
        $input['sort'] = null;

        // Set callback and perform API call
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            self::$controller->getAllFiles($input);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }
}
