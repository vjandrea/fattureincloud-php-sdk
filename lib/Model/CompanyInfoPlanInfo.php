<?php
/**
 * CompanyInfoPlanInfo
 *
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
 * Connect your software with Fatture in Cloud, the invoicing platform chosen by more than 400.000 businesses in Italy.   The Fatture in Cloud API is based on REST, and makes possible to interact with the user related data prior authorization via OAuth2 protocol.
 *
 * The version of the OpenAPI document: 2.0.19
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FattureInCloud\Model;

use \ArrayAccess;
use \FattureInCloud\ObjectSerializer;

/**
 * CompanyInfoPlanInfo Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<string, mixed>
 */
class CompanyInfoPlanInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CompanyInfo_plan_info';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'limits' => '\FattureInCloud\Model\CompanyInfoPlanInfoLimits',
        'functions' => '\FattureInCloud\Model\CompanyInfoPlanInfoFunctions',
        'functions_status' => '\FattureInCloud\Model\CompanyInfoPlanInfoFunctionsStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'limits' => null,
        'functions' => null,
        'functions_status' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'limits' => 'limits',
        'functions' => 'functions',
        'functions_status' => 'functions_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'limits' => 'setLimits',
        'functions' => 'setFunctions',
        'functions_status' => 'setFunctionsStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'limits' => 'getLimits',
        'functions' => 'getFunctions',
        'functions_status' => 'getFunctionsStatus'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['limits'] = $data['limits'] ?? null;
        $this->container['functions'] = $data['functions'] ?? null;
        $this->container['functions_status'] = $data['functions_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets limits
     *
     * @return \FattureInCloud\Model\CompanyInfoPlanInfoLimits|null
     */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
     * Sets limits
     *
     * @param \FattureInCloud\Model\CompanyInfoPlanInfoLimits|null $limits limits
     *
     * @return self
     */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;

        return $this;
    }

    /**
     * Gets functions
     *
     * @return \FattureInCloud\Model\CompanyInfoPlanInfoFunctions|null
     */
    public function getFunctions()
    {
        return $this->container['functions'];
    }

    /**
     * Sets functions
     *
     * @param \FattureInCloud\Model\CompanyInfoPlanInfoFunctions|null $functions functions
     *
     * @return self
     */
    public function setFunctions($functions)
    {
        $this->container['functions'] = $functions;

        return $this;
    }

    /**
     * Gets functions_status
     *
     * @return \FattureInCloud\Model\CompanyInfoPlanInfoFunctionsStatus|null
     */
    public function getFunctionsStatus()
    {
        return $this->container['functions_status'];
    }

    /**
     * Sets functions_status
     *
     * @param \FattureInCloud\Model\CompanyInfoPlanInfoFunctionsStatus|null $functions_status functions_status
     *
     * @return self
     */
    public function setFunctionsStatus($functions_status)
    {
        $this->container['functions_status'] = $functions_status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link     https://fattureincloud.it
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


