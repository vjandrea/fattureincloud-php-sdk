<?php
/**
 * IssuedDocumentPreCreateInfoExtraDataDefaultValues
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
 * The version of the OpenAPI document: 2.0.30
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
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
 * IssuedDocumentPreCreateInfoExtraDataDefaultValues Class Doc Comment
 *
 * @category Class
 * @description Issued document extra data default values
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<string, mixed>
 */
class IssuedDocumentPreCreateInfoExtraDataDefaultValues implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IssuedDocumentPreCreateInfo_extra_data_default_values';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ts_communication' => 'bool',
        'ts_tipo_spesa' => 'string',
        'ts_flag_tipo_spesa' => 'int',
        'ts_pagamento_tracciato' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ts_communication' => null,
        'ts_tipo_spesa' => null,
        'ts_flag_tipo_spesa' => null,
        'ts_pagamento_tracciato' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'ts_communication' => true,
            'ts_tipo_spesa' => true,
            'ts_flag_tipo_spesa' => true,
            'ts_pagamento_tracciato' => true
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
        'ts_communication' => 'ts_communication',
        'ts_tipo_spesa' => 'ts_tipo_spesa',
        'ts_flag_tipo_spesa' => 'ts_flag_tipo_spesa',
        'ts_pagamento_tracciato' => 'ts_pagamento_tracciato'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ts_communication' => 'setTsCommunication',
        'ts_tipo_spesa' => 'setTsTipoSpesa',
        'ts_flag_tipo_spesa' => 'setTsFlagTipoSpesa',
        'ts_pagamento_tracciato' => 'setTsPagamentoTracciato'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ts_communication' => 'getTsCommunication',
        'ts_tipo_spesa' => 'getTsTipoSpesa',
        'ts_flag_tipo_spesa' => 'getTsFlagTipoSpesa',
        'ts_pagamento_tracciato' => 'getTsPagamentoTracciato'
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
        $this->setIfExists('ts_communication', $data ?? [], null);
        $this->setIfExists('ts_tipo_spesa', $data ?? [], null);
        $this->setIfExists('ts_flag_tipo_spesa', $data ?? [], null);
        $this->setIfExists('ts_pagamento_tracciato', $data ?? [], null);
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
     * Gets ts_communication
     *
     * @return bool|null
     */
    public function getTsCommunication()
    {
        return $this->container['ts_communication'];
    }

    /**
     * Sets ts_communication
     *
     * @param bool|null $ts_communication ts_communication
     *
     * @return self
     */
    public function setTsCommunication($ts_communication)
    {
        if (is_null($ts_communication)) {
            array_push($this->openAPINullablesSetToNull, 'ts_communication');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ts_communication', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ts_communication'] = $ts_communication;

        return $this;
    }

    /**
     * Gets ts_tipo_spesa
     *
     * @return string|null
     */
    public function getTsTipoSpesa()
    {
        return $this->container['ts_tipo_spesa'];
    }

    /**
     * Sets ts_tipo_spesa
     *
     * @param string|null $ts_tipo_spesa ts_tipo_spesa
     *
     * @return self
     */
    public function setTsTipoSpesa($ts_tipo_spesa)
    {
        if (is_null($ts_tipo_spesa)) {
            array_push($this->openAPINullablesSetToNull, 'ts_tipo_spesa');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ts_tipo_spesa', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ts_tipo_spesa'] = $ts_tipo_spesa;

        return $this;
    }

    /**
     * Gets ts_flag_tipo_spesa
     *
     * @return int|null
     */
    public function getTsFlagTipoSpesa()
    {
        return $this->container['ts_flag_tipo_spesa'];
    }

    /**
     * Sets ts_flag_tipo_spesa
     *
     * @param int|null $ts_flag_tipo_spesa ts_flag_tipo_spesa
     *
     * @return self
     */
    public function setTsFlagTipoSpesa($ts_flag_tipo_spesa)
    {
        if (is_null($ts_flag_tipo_spesa)) {
            array_push($this->openAPINullablesSetToNull, 'ts_flag_tipo_spesa');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ts_flag_tipo_spesa', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ts_flag_tipo_spesa'] = $ts_flag_tipo_spesa;

        return $this;
    }

    /**
     * Gets ts_pagamento_tracciato
     *
     * @return bool|null
     */
    public function getTsPagamentoTracciato()
    {
        return $this->container['ts_pagamento_tracciato'];
    }

    /**
     * Sets ts_pagamento_tracciato
     *
     * @param bool|null $ts_pagamento_tracciato ts_pagamento_tracciato
     *
     * @return self
     */
    public function setTsPagamentoTracciato($ts_pagamento_tracciato)
    {
        if (is_null($ts_pagamento_tracciato)) {
            array_push($this->openAPINullablesSetToNull, 'ts_pagamento_tracciato');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ts_pagamento_tracciato', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ts_pagamento_tracciato'] = $ts_pagamento_tracciato;

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


