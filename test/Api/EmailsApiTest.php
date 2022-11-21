<?php
/**
 * EmailsApiTest
 * PHP version 7.4
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */

/**
 * Fatture in Cloud API v2 - API Reference
 *
 * Connect your software with Fatture in Cloud, the invoicing platform chosen by more than 500.000 businesses in Italy.   The Fatture in Cloud API is based on REST, and makes possible to interact with the user related data prior authorization via OAuth2 protocol.
 *
 * The version of the OpenAPI document: 2.0.22
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace FattureInCloud\Test\Api;

use \FattureInCloud\Configuration;
use \FattureInCloud\ApiException;
use \FattureInCloud\ObjectSerializer;
use PHPUnit\Framework\TestCase;
use \GuzzleHttp\Client;
use \GuzzleHttp\Handler\MockHandler;
use \GuzzleHttp\HandlerStack;
use \GuzzleHttp\Psr7\Response;
use \GuzzleHttp\Psr7\Request;
use \GuzzleHttp\Exception\RequestException;

/**
 * EmailsApiTest Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class EmailsApiTest extends TestCase
{
    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for listEmails
     *
     * List emails.
     *
     */
    public function testListEmails()
    {
        $stream = '{"current_page":1,"data":[{"id":1,"status":"sent","sent_date":"2022-07-17 13:53:12","errors_count":0,"error_log":"","from_email":"test@mail.it","from_name":"Test mail","to_email":"mail@test.it","to_name":"Mario","subject":"Test","content":"Test send email","copy_to":"","recipient_status":"unknown","recipient_date":null,"kind":"Fatture","attachments":[]},{"id":2,"status":"sent","sent_date":"2022-07-18 13:53:12","errors_count":0,"error_log":"","from_email":"test@mail.it","from_name":"Test mail","to_email":"mail@test.it","to_name":"Maria","subject":"Test","content":"Test send email","copy_to":"","recipient_status":"unknown","recipient_date":null,"kind":"Fatture","attachments":[]}],"first_page_url":"emails?page=1","next_page_url":"emails?page=1","from":1,"last_page":1,"last_page_url":"emails?page=1","path":"emails","per_page":50,"prev_page_url":"emails?page=1","to":2,"total":2}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $apiInstance = new \FattureInCloud\Api\EmailsApi(
            new \GuzzleHttp\Client(['handler' => $handler])
        );
        $company_id = 2;
        $result = $apiInstance->listEmails($company_id);
        $obj = ObjectSerializer::deserialize($stream, '\FattureInCloud\Model\ListEmailsResponse');

        TestCase::assertEquals($obj, $result);
    }
}
