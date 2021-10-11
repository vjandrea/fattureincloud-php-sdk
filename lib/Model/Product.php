<?php
/**
 * Product
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
 * The version of the OpenAPI document: 2.0.0
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
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
 * Product Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Product implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'code' => 'string',
        'net_price' => 'float',
        'gross_price' => 'float',
        'use_gross_price' => 'bool',
        'default_vat' => '\FattureInCloud\Model\VatType',
        'net_cost' => 'float',
        'measure' => 'string',
        'description' => 'string',
        'category' => 'string',
        'notes' => 'string',
        'in_stock' => 'bool',
        'stock_initial' => 'float',
        'stock_current' => 'float',
        'average_cost' => 'float',
        'average_price' => 'float',
        'created_at' => 'string',
        'updated_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'code' => null,
        'net_price' => null,
        'gross_price' => null,
        'use_gross_price' => null,
        'default_vat' => null,
        'net_cost' => null,
        'measure' => null,
        'description' => null,
        'category' => null,
        'notes' => null,
        'in_stock' => null,
        'stock_initial' => null,
        'stock_current' => null,
        'average_cost' => null,
        'average_price' => null,
        'created_at' => null,
        'updated_at' => null
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
        'id' => 'id',
        'name' => 'name',
        'code' => 'code',
        'net_price' => 'net_price',
        'gross_price' => 'gross_price',
        'use_gross_price' => 'use_gross_price',
        'default_vat' => 'default_vat',
        'net_cost' => 'net_cost',
        'measure' => 'measure',
        'description' => 'description',
        'category' => 'category',
        'notes' => 'notes',
        'in_stock' => 'in_stock',
        'stock_initial' => 'stock_initial',
        'stock_current' => 'stock_current',
        'average_cost' => 'average_cost',
        'average_price' => 'average_price',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'code' => 'setCode',
        'net_price' => 'setNetPrice',
        'gross_price' => 'setGrossPrice',
        'use_gross_price' => 'setUseGrossPrice',
        'default_vat' => 'setDefaultVat',
        'net_cost' => 'setNetCost',
        'measure' => 'setMeasure',
        'description' => 'setDescription',
        'category' => 'setCategory',
        'notes' => 'setNotes',
        'in_stock' => 'setInStock',
        'stock_initial' => 'setStockInitial',
        'stock_current' => 'setStockCurrent',
        'average_cost' => 'setAverageCost',
        'average_price' => 'setAveragePrice',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'code' => 'getCode',
        'net_price' => 'getNetPrice',
        'gross_price' => 'getGrossPrice',
        'use_gross_price' => 'getUseGrossPrice',
        'default_vat' => 'getDefaultVat',
        'net_cost' => 'getNetCost',
        'measure' => 'getMeasure',
        'description' => 'getDescription',
        'category' => 'getCategory',
        'notes' => 'getNotes',
        'in_stock' => 'getInStock',
        'stock_initial' => 'getStockInitial',
        'stock_current' => 'getStockCurrent',
        'average_cost' => 'getAverageCost',
        'average_price' => 'getAveragePrice',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['net_price'] = $data['net_price'] ?? null;
        $this->container['gross_price'] = $data['gross_price'] ?? null;
        $this->container['use_gross_price'] = $data['use_gross_price'] ?? null;
        $this->container['default_vat'] = $data['default_vat'] ?? null;
        $this->container['net_cost'] = $data['net_cost'] ?? null;
        $this->container['measure'] = $data['measure'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['in_stock'] = $data['in_stock'] ?? null;
        $this->container['stock_initial'] = $data['stock_initial'] ?? null;
        $this->container['stock_current'] = $data['stock_current'] ?? null;
        $this->container['average_cost'] = $data['average_cost'] ?? null;
        $this->container['average_price'] = $data['average_price'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Unique identifier.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Product name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code Product code.
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets net_price
     *
     * @return float|null
     */
    public function getNetPrice()
    {
        return $this->container['net_price'];
    }

    /**
     * Sets net_price
     *
     * @param float|null $net_price Net sale price (used if use_gross_price is false, otherwise it's competed automatically).
     *
     * @return self
     */
    public function setNetPrice($net_price)
    {
        $this->container['net_price'] = $net_price;

        return $this;
    }

    /**
     * Gets gross_price
     *
     * @return float|null
     */
    public function getGrossPrice()
    {
        return $this->container['gross_price'];
    }

    /**
     * Sets gross_price
     *
     * @param float|null $gross_price Gross sale price (used if use_gross_price is false, otherwise it's competed automatically).
     *
     * @return self
     */
    public function setGrossPrice($gross_price)
    {
        $this->container['gross_price'] = $gross_price;

        return $this;
    }

    /**
     * Gets use_gross_price
     *
     * @return bool|null
     */
    public function getUseGrossPrice()
    {
        return $this->container['use_gross_price'];
    }

    /**
     * Sets use_gross_price
     *
     * @param bool|null $use_gross_price Determine which price to use for calculations.
     *
     * @return self
     */
    public function setUseGrossPrice($use_gross_price)
    {
        $this->container['use_gross_price'] = $use_gross_price;

        return $this;
    }

    /**
     * Gets default_vat
     *
     * @return \FattureInCloud\Model\VatType|null
     */
    public function getDefaultVat()
    {
        return $this->container['default_vat'];
    }

    /**
     * Sets default_vat
     *
     * @param \FattureInCloud\Model\VatType|null $default_vat default_vat
     *
     * @return self
     */
    public function setDefaultVat($default_vat)
    {
        $this->container['default_vat'] = $default_vat;

        return $this;
    }

    /**
     * Gets net_cost
     *
     * @return float|null
     */
    public function getNetCost()
    {
        return $this->container['net_cost'];
    }

    /**
     * Sets net_cost
     *
     * @param float|null $net_cost Net cost of the product (used for received documents).
     *
     * @return self
     */
    public function setNetCost($net_cost)
    {
        $this->container['net_cost'] = $net_cost;

        return $this;
    }

    /**
     * Gets measure
     *
     * @return string|null
     */
    public function getMeasure()
    {
        return $this->container['measure'];
    }

    /**
     * Sets measure
     *
     * @param string|null $measure Unit of measure.
     *
     * @return self
     */
    public function setMeasure($measure)
    {
        $this->container['measure'] = $measure;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Product description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category Product category.
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes Extra notes.
     *
     * @return self
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets in_stock
     *
     * @return bool|null
     */
    public function getInStock()
    {
        return $this->container['in_stock'];
    }

    /**
     * Sets in_stock
     *
     * @param bool|null $in_stock Determine if the product is in stock.
     *
     * @return self
     */
    public function setInStock($in_stock)
    {
        $this->container['in_stock'] = $in_stock;

        return $this;
    }

    /**
     * Gets stock_initial
     *
     * @return float|null
     */
    public function getStockInitial()
    {
        return $this->container['stock_initial'];
    }

    /**
     * Sets stock_initial
     *
     * @param float|null $stock_initial Product initial stock.
     *
     * @return self
     */
    public function setStockInitial($stock_initial)
    {
        $this->container['stock_initial'] = $stock_initial;

        return $this;
    }

    /**
     * Gets stock_current
     *
     * @return float|null
     */
    public function getStockCurrent()
    {
        return $this->container['stock_current'];
    }

    /**
     * Sets stock_current
     *
     * @param float|null $stock_current [Read Only] Product current stock.
     *
     * @return self
     */
    public function setStockCurrent($stock_current)
    {
        $this->container['stock_current'] = $stock_current;

        return $this;
    }

    /**
     * Gets average_cost
     *
     * @return float|null
     */
    public function getAverageCost()
    {
        return $this->container['average_cost'];
    }

    /**
     * Sets average_cost
     *
     * @param float|null $average_cost Product average cost.
     *
     * @return self
     */
    public function setAverageCost($average_cost)
    {
        $this->container['average_cost'] = $average_cost;

        return $this;
    }

    /**
     * Gets average_price
     *
     * @return float|null
     */
    public function getAveragePrice()
    {
        return $this->container['average_price'];
    }

    /**
     * Sets average_price
     *
     * @param float|null $average_price Product average price.
     *
     * @return self
     */
    public function setAveragePrice($average_price)
    {
        $this->container['average_price'] = $average_price;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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

