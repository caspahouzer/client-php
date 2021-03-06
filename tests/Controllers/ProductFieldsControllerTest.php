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

class ProductFieldsControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Pipedrive\Controllers\ProductFieldsController Controller instance
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
        self::$controller = $client->getProductFields();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Adds a new product field. For more information on adding a new custom field, see <a href="https://pipedrive.readme.io/docs/adding-a-new-custom-field" target="_blank" rel="noopener noreferrer">this tutorial</a>.
     */
    public function testTestAddANewProductField()
    {
        // Parameters for the API call
        $body = null;

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->addANewProductField($body);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test headers
        $headers = [];
        $headers['Content-Type'] = 'application/json' ;

        $this->assertTrue(
            TestHelper::areHeadersProperSubsetOf($headers, $this->httpResponse->getResponse()->getHeaders(), true),
            "Headers do not match"
        );

        // Test whether the captured response is as we expected
        $this->assertNotNull($result, "Result does not exist");

        $this->assertTrue(
            TestHelper::isJsonObjectProperSubsetOf(
                "{\"success\":true,\"data\":{\"id\":32,\"key\":\"397b0f545d134b479a5485041b33b0f0f3da2333\",\"name\":" .
                "\"Color\",\"order_nr\":13,\"field_type\":\"enum\",\"add_time\":\"2019-12-20 11:01:24\",\"update_time" .
                "\":\"2019-12-20 11:01:24\",\"last_updated_by_user_id\":10999910,\"active_flag\":true,\"edit_flag\":t" .
                "rue,\"index_visible_flag\":true,\"details_visible_flag\":true,\"add_visible_flag\":true,\"important_" .
                "flag\":false,\"bulk_edit_allowed\":true,\"searchable_flag\":false,\"filtering_allowed\":true,\"sorta" .
                "ble_flag\":true,\"options\":\"[{\\\"id\\\":9,\\\"label\\\":\\\"red\\\"},{\\\"id\\\":10,\\\"label\\\"" .
                ":\\\"blue\\\"},{\\\"id\\\":11,\\\"label\\\":\\\"lilac\\\"}]\",\"mandatory_flag\":false}}",
                $this->httpResponse->getResponse()->getRawBody(),
                false,
                true,
                false
            ),
            "Response body does not match in keys"
        );
    }
}
