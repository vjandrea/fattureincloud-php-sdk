<?php
/**
 * ListEmailsResponse
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
 * Connect your software with Fatture in Cloud, the invoicing platform chosen by more than 500.000 businesses in Italy.   The Fatture in Cloud API is based on REST, and makes possible to interact with the user related data prior authorization via OAuth2 protocol.
 *
 * The version of the OpenAPI document: 2.0.31
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0
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
 * ListEmailsResponse Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<string, mixed>
 */
class ListEmailsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListEmailsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'current_page' => 'int',
        'first_page_url' => 'string',
        'from' => 'int',
        'last_page' => 'int',
        'last_page_url' => 'string',
        'next_page_url' => 'string',
        'path' => 'string',
        'per_page' => 'int',
        'prev_page_url' => 'string',
        'to' => 'int',
        'total' => 'int',
        'data' => '\FattureInCloud\Model\Email[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'current_page' => null,
        'first_page_url' => 'uri',
        'from' => null,
        'last_page' => null,
        'last_page_url' => 'uri',
        'next_page_url' => 'uri',
        'path' => 'uri',
        'per_page' => null,
        'prev_page_url' => 'uri',
        'to' => null,
        'total' => null,
        'data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'current_page' => true,
            'first_page_url' => true,
            'from' => true,
            'last_page' => true,
            'last_page_url' => true,
            'next_page_url' => true,
            'path' => true,
            'per_page' => true,
            'prev_page_url' => true,
            'to' => true,
            'total' => true,
            'data' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull($openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'current_page' => 'current_page',
        'first_page_url' => 'first_page_url',
        'from' => 'from',
        'last_page' => 'last_page',
        'last_page_url' => 'last_page_url',
        'next_page_url' => 'next_page_url',
        'path' => 'path',
        'per_page' => 'per_page',
        'prev_page_url' => 'prev_page_url',
        'to' => 'to',
        'total' => 'total',
        'data' => 'data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_page' => 'setCurrentPage',
        'first_page_url' => 'setFirstPageUrl',
        'from' => 'setFrom',
        'last_page' => 'setLastPage',
        'last_page_url' => 'setLastPageUrl',
        'next_page_url' => 'setNextPageUrl',
        'path' => 'setPath',
        'per_page' => 'setPerPage',
        'prev_page_url' => 'setPrevPageUrl',
        'to' => 'setTo',
        'total' => 'setTotal',
        'data' => 'setData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_page' => 'getCurrentPage',
        'first_page_url' => 'getFirstPageUrl',
        'from' => 'getFrom',
        'last_page' => 'getLastPage',
        'last_page_url' => 'getLastPageUrl',
        'next_page_url' => 'getNextPageUrl',
        'path' => 'getPath',
        'per_page' => 'getPerPage',
        'prev_page_url' => 'getPrevPageUrl',
        'to' => 'getTo',
        'total' => 'getTotal',
        'data' => 'getData'
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
    public function __construct($data = null)
    {
        $this->setIfExists('current_page', $data ?? [], null);
        $this->setIfExists('first_page_url', $data ?? [], null);
        $this->setIfExists('from', $data ?? [], null);
        $this->setIfExists('last_page', $data ?? [], null);
        $this->setIfExists('last_page_url', $data ?? [], null);
        $this->setIfExists('next_page_url', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('per_page', $data ?? [], null);
        $this->setIfExists('prev_page_url', $data ?? [], null);
        $this->setIfExists('to', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('data', $data ?? [], null);
    }

    /**
      * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
      * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
      * $this->openAPINullablesSetToNull array
      *
      * @param string $variableName
      * @param array  $fields
      * @param mixed  $defaultValue
      */
    private function setIfExists(string $variableName, $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets current_page
     *
     * @return int|null
     */
    public function getCurrentPage()
    {
        return $this->container['current_page'];
    }

    /**
     * Sets current_page
     *
     * @param int|null $current_page Current page number.
     *
     * @return self
     */
    public function setCurrentPage($current_page)
    {
        if (is_null($current_page)) {
            array_push($this->openAPINullablesSetToNull, 'current_page');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('current_page', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['current_page'] = $current_page;

        return $this;
    }

    /**
     * Gets first_page_url
     *
     * @return string|null
     */
    public function getFirstPageUrl()
    {
        return $this->container['first_page_url'];
    }

    /**
     * Sets first_page_url
     *
     * @param string|null $first_page_url First page url.
     *
     * @return self
     */
    public function setFirstPageUrl($first_page_url)
    {
        if (is_null($first_page_url)) {
            array_push($this->openAPINullablesSetToNull, 'first_page_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('first_page_url', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['first_page_url'] = $first_page_url;

        return $this;
    }

    /**
     * Gets from
     *
     * @return int|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param int|null $from First result of the page.
     *
     * @return self
     */
    public function setFrom($from)
    {
        if (is_null($from)) {
            array_push($this->openAPINullablesSetToNull, 'from');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('from', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets last_page
     *
     * @return int|null
     */
    public function getLastPage()
    {
        return $this->container['last_page'];
    }

    /**
     * Sets last_page
     *
     * @param int|null $last_page Last page number.
     *
     * @return self
     */
    public function setLastPage($last_page)
    {
        if (is_null($last_page)) {
            array_push($this->openAPINullablesSetToNull, 'last_page');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_page', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_page'] = $last_page;

        return $this;
    }

    /**
     * Gets last_page_url
     *
     * @return string|null
     */
    public function getLastPageUrl()
    {
        return $this->container['last_page_url'];
    }

    /**
     * Sets last_page_url
     *
     * @param string|null $last_page_url Last page url.
     *
     * @return self
     */
    public function setLastPageUrl($last_page_url)
    {
        if (is_null($last_page_url)) {
            array_push($this->openAPINullablesSetToNull, 'last_page_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_page_url', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_page_url'] = $last_page_url;

        return $this;
    }

    /**
     * Gets next_page_url
     *
     * @return string|null
     */
    public function getNextPageUrl()
    {
        return $this->container['next_page_url'];
    }

    /**
     * Sets next_page_url
     *
     * @param string|null $next_page_url Next page url
     *
     * @return self
     */
    public function setNextPageUrl($next_page_url)
    {
        if (is_null($next_page_url)) {
            array_push($this->openAPINullablesSetToNull, 'next_page_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('next_page_url', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['next_page_url'] = $next_page_url;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path Request path.
     *
     * @return self
     */
    public function setPath($path)
    {
        if (is_null($path)) {
            array_push($this->openAPINullablesSetToNull, 'path');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('path', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets per_page
     *
     * @return int|null
     */
    public function getPerPage()
    {
        return $this->container['per_page'];
    }

    /**
     * Sets per_page
     *
     * @param int|null $per_page Number of result per page.
     *
     * @return self
     */
    public function setPerPage($per_page)
    {
        if (is_null($per_page)) {
            array_push($this->openAPINullablesSetToNull, 'per_page');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('per_page', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['per_page'] = $per_page;

        return $this;
    }

    /**
     * Gets prev_page_url
     *
     * @return string|null
     */
    public function getPrevPageUrl()
    {
        return $this->container['prev_page_url'];
    }

    /**
     * Sets prev_page_url
     *
     * @param string|null $prev_page_url Previous page url.
     *
     * @return self
     */
    public function setPrevPageUrl($prev_page_url)
    {
        if (is_null($prev_page_url)) {
            array_push($this->openAPINullablesSetToNull, 'prev_page_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('prev_page_url', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['prev_page_url'] = $prev_page_url;

        return $this;
    }

    /**
     * Gets to
     *
     * @return int|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param int|null $to Last result of the page.
     *
     * @return self
     */
    public function setTo($to)
    {
        if (is_null($to)) {
            array_push($this->openAPINullablesSetToNull, 'to');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('to', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int|null $total Total number of results
     *
     * @return self
     */
    public function setTotal($total)
    {
        if (is_null($total)) {
            array_push($this->openAPINullablesSetToNull, 'total');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \FattureInCloud\Model\Email[]|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \FattureInCloud\Model\Email[]|null $data data
     *
     * @return self
     */
    public function setData($data)
    {
        if (is_null($data)) {
            throw new \InvalidArgumentException('non-nullable data cannot be null');
        }
        $this->container['data'] = $data;

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


