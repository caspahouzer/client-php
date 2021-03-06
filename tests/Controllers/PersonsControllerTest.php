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

class PersonsControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Pipedrive\Controllers\PersonsController Controller instance
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
        self::$controller = $client->getPersons();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Marks multiple persons as deleted.
     */
    public function testTestDeleteMultiplePersonsInBulk()
    {
        // Parameters for the API call
        $ids = null;

        // Set callback and perform API call
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            self::$controller->deleteMultiplePersonsInBulk($ids);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }

    /**
     * Returns all persons
     */
    public function testTestGetAllPersons()
    {
        // Parameters for the API call
        $input = array();
        $input['userId'] = null;
        $input['filterId'] = null;
        $input['firstChar'] = null;
        $input['start'] = 0;
        $input['limit'] = null;
        $input['sort'] = null;

        // Set callback and perform API call
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            self::$controller->getAllPersons($input);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }

    /**
     * Adds a new person. Note that you can supply additional custom fields along with the request that are not described here. These custom fields are different for each Pipedrive account and can be recognized by long hashes as keys. To determine which custom fields exists, fetch the personFields and look for 'key' values.
     */
    public function testTestAddAPerson()
    {
        // Parameters for the API call
        $body = null;

        // Set callback and perform API call
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            self::$controller->addAPerson($body);
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
