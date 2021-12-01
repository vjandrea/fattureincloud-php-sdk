<?php
/**
 * CompanyTest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */

/**
 * Fatture in Cloud API v2 - API Reference
 *
 * ## Request informations In every request description you will be able to find some additional informations about context, permissions and supported functionality:  | Parameter | Description | |-----------|-------------| | 👥 Context | Indicate the subject of the request. Can be `company`, `user` or `accountant`.  | | 🔒 Required scope | If present, indicates the required scope to fulfill the request. | | 🔍 Filtering | If present, indicates which fields support the filtering feature. | | ↕️ Sorting | If present, indicates which fields support the sorting feature. | | 📄 Paginated results | If present, indicate that the results are paginated. | | 🎩 Customized responses supported | If present, indicate that you can use `field` or `fieldset` to customize the response body. |  For example the request `GET /entities/{entityRole}` have tis informations: \\ 👥 Company context \\ 🔒 Required scope: `entity.clients:r` or `entity.suppliers:r` (depending on `entityRole`) \\ 🔍 Filtering: `id`, `name` \\ ↕️ Sorting: `id`, `name` \\ 📄 Paginated results \\ 🎩 Customized responses supported  Keep in mind that if you are making **company realted requests**, you will need to specify the company id in the requests: ``` GET /c/{company_id}/issued_documents ```
 *
 * The version of the OpenAPI document: 2.0.6
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace FattureInCloud\Test\Model;

use PHPUnit\Framework\TestCase;
use \FattureInCloud\ObjectSerializer;

/**
 * CompanyTest Class Doc Comment
 *
 * @category    Class
 * @description Description of a company.
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class CompanyTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $json = '{
            "id": 12345,
            "name": "Studio Commercialista",
            "tax_code": "ABCSFN94T17A794K",
            "type": "accountant",
            "access_token": "4ff5f0fe5abcd1d7157fa13ca72ab62b6183db0667a576a0e19164801c18c4f7362a848fa32dbb8c3a3f94c34f3df95",
            "connection_id": 94566,
            "access_token": "ergaegwergq53wh65je5j",
              "controlled_companies": [
                {
                  "id": 12246,
                  "name": "Studio Commercialista",
                  "tax_code": "ABCSFN94T17A794K",
                  "type": "company",
                  "access_token": "4ff5f0fe5abcdf1d7157fa13ca72ab62b6183db0667a576a0e19164801c18c4f7362a848fa32dbb8c3a3f94c34f3df95",
                  "connection_id": 94566,
                  "controlled_companies": []
                },
                {
                  "id": 12347,
                  "name": "Mario Rossi SRL",
                  "tax_code": "57398280214",
                  "type": "company",
                  "access_token": "86690c98be13592e78b763c52fab2ba0c22faa118708ca5273da2b4dcdc7ad1234517107266d463fd9ae424a78c16cde",
                  "connection_id": 94566,
                  "controlled_companies": []
                }
              ]
            }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\Company');
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
     * Test "Company"
     */
    public function testCompany()
    {
        foreach ($this->array as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object);
        }
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
        TestCase::assertEquals($this->object['id'], $this->array['id']);
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
        TestCase::assertEquals($this->object['name'], $this->array['name']);
    }

    /**
     * Test attribute "type"
     */
    public function testPropertyType()
    {
        TestCase::assertEquals($this->object['type'], $this->array['type']);
    }

    /**
     * Test attribute "access_token"
     */
    public function testPropertyAccessToken()
    {
        TestCase::assertEquals($this->object['access_token'], $this->array['access_token']);

    }

    /**
     * Test attribute "controlled_companies"
     */
    public function testPropertyControlledCompanies()
    {
        foreach ($this->array['controlled_companies'] as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object['controlled_companies']);
        }
    }

    /**
     * Test attribute "connection_id"
     */
    public function testPropertyConnectionId()
    {
        TestCase::assertEquals($this->object['connection_id'], $this->array['connection_id']);
    }

    /**
     * Test attribute "tax_code"
     */
    public function testPropertyTaxCode()
    {
        TestCase::assertEquals($this->object['tax_code'], $this->array['tax_code']);
    }
}
