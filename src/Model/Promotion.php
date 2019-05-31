<?php
/**
 * Promotion
 *
 * PHP version 5
 *
 * @category Class
 * @package  Parenthesis\DingConnect
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ding API
 *
 * Important note: If you are within DingConnect, your API key is displayed above and can be used to access and send top-up from your system via the Ding API.    The Ding API is a Level 0 REST web service.  We have used the <a href=\"http://swagger.io\">swagger</a> standard to describe this service. As a result, we are able to provide this interactive documentation page. For further information, you may view the <a href=\"/api/description\">additional documentation</a>; read our <a href=\"/api/faq\">FAQ</a> or contact partnersupport@ding.com
 *
 * OpenAPI spec version: V1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.5
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Parenthesis\DingConnect\Model;

use \ArrayAccess;
use \Parenthesis\DingConnect\ObjectSerializer;

/**
 * Promotion Class Doc Comment
 *
 * @category Class
 * @package  Parenthesis\DingConnect
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Promotion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Promotion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'provider_code' => 'string',
        'start_utc' => '\DateTime',
        'end_utc' => '\DateTime',
        'currency_iso' => 'string',
        'validity_period_iso' => 'string',
        'minimum_send_amount' => 'float',
        'localization_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'provider_code' => null,
        'start_utc' => 'date-time',
        'end_utc' => 'date-time',
        'currency_iso' => null,
        'validity_period_iso' => null,
        'minimum_send_amount' => 'decimal',
        'localization_key' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'provider_code' => 'ProviderCode',
        'start_utc' => 'StartUtc',
        'end_utc' => 'EndUtc',
        'currency_iso' => 'CurrencyIso',
        'validity_period_iso' => 'ValidityPeriodIso',
        'minimum_send_amount' => 'MinimumSendAmount',
        'localization_key' => 'LocalizationKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'provider_code' => 'setProviderCode',
        'start_utc' => 'setStartUtc',
        'end_utc' => 'setEndUtc',
        'currency_iso' => 'setCurrencyIso',
        'validity_period_iso' => 'setValidityPeriodIso',
        'minimum_send_amount' => 'setMinimumSendAmount',
        'localization_key' => 'setLocalizationKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'provider_code' => 'getProviderCode',
        'start_utc' => 'getStartUtc',
        'end_utc' => 'getEndUtc',
        'currency_iso' => 'getCurrencyIso',
        'validity_period_iso' => 'getValidityPeriodIso',
        'minimum_send_amount' => 'getMinimumSendAmount',
        'localization_key' => 'getLocalizationKey'
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
        return self::$swaggerModelName;
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
        $this->container['provider_code'] = isset($data['provider_code']) ? $data['provider_code'] : null;
        $this->container['start_utc'] = isset($data['start_utc']) ? $data['start_utc'] : null;
        $this->container['end_utc'] = isset($data['end_utc']) ? $data['end_utc'] : null;
        $this->container['currency_iso'] = isset($data['currency_iso']) ? $data['currency_iso'] : null;
        $this->container['validity_period_iso'] = isset($data['validity_period_iso']) ? $data['validity_period_iso'] : null;
        $this->container['minimum_send_amount'] = isset($data['minimum_send_amount']) ? $data['minimum_send_amount'] : null;
        $this->container['localization_key'] = isset($data['localization_key']) ? $data['localization_key'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['provider_code'] === null) {
            $invalidProperties[] = "'provider_code' can't be null";
        }
        if ($this->container['start_utc'] === null) {
            $invalidProperties[] = "'start_utc' can't be null";
        }
        if ($this->container['end_utc'] === null) {
            $invalidProperties[] = "'end_utc' can't be null";
        }
        if ($this->container['currency_iso'] === null) {
            $invalidProperties[] = "'currency_iso' can't be null";
        }
        if ($this->container['minimum_send_amount'] === null) {
            $invalidProperties[] = "'minimum_send_amount' can't be null";
        }
        if ($this->container['localization_key'] === null) {
            $invalidProperties[] = "'localization_key' can't be null";
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
     * Gets provider_code
     *
     * @return string
     */
    public function getProviderCode()
    {
        return $this->container['provider_code'];
    }

    /**
     * Sets provider_code
     *
     * @param string $provider_code The code of the provider that the promotion applies to
     *
     * @return $this
     */
    public function setProviderCode($provider_code)
    {
        $this->container['provider_code'] = $provider_code;

        return $this;
    }

    /**
     * Gets start_utc
     *
     * @return \DateTime
     */
    public function getStartUtc()
    {
        return $this->container['start_utc'];
    }

    /**
     * Sets start_utc
     *
     * @param \DateTime $start_utc Start date and time in UTC of the promotion
     *
     * @return $this
     */
    public function setStartUtc($start_utc)
    {
        $this->container['start_utc'] = $start_utc;

        return $this;
    }

    /**
     * Gets end_utc
     *
     * @return \DateTime
     */
    public function getEndUtc()
    {
        return $this->container['end_utc'];
    }

    /**
     * Sets end_utc
     *
     * @param \DateTime $end_utc End date and time in UTC of the promotion. This will be DateTime.MaxValue if there is no end date.
     *
     * @return $this
     */
    public function setEndUtc($end_utc)
    {
        $this->container['end_utc'] = $end_utc;

        return $this;
    }

    /**
     * Gets currency_iso
     *
     * @return string
     */
    public function getCurrencyIso()
    {
        return $this->container['currency_iso'];
    }

    /**
     * Sets currency_iso
     *
     * @param string $currency_iso Currency promotion - usually the same as the Provider
     *
     * @return $this
     */
    public function setCurrencyIso($currency_iso)
    {
        $this->container['currency_iso'] = $currency_iso;

        return $this;
    }

    /**
     * Gets validity_period_iso
     *
     * @return string
     */
    public function getValidityPeriodIso()
    {
        return $this->container['validity_period_iso'];
    }

    /**
     * Sets validity_period_iso
     *
     * @param string $validity_period_iso Validity of the promotion
     *
     * @return $this
     */
    public function setValidityPeriodIso($validity_period_iso)
    {
        $this->container['validity_period_iso'] = $validity_period_iso;

        return $this;
    }

    /**
     * Gets minimum_send_amount
     *
     * @return float
     */
    public function getMinimumSendAmount()
    {
        return $this->container['minimum_send_amount'];
    }

    /**
     * Sets minimum_send_amount
     *
     * @param float $minimum_send_amount Minimum amount to be sent to apply for this promotion, specified in the distributor's currency
     *
     * @return $this
     */
    public function setMinimumSendAmount($minimum_send_amount)
    {
        $this->container['minimum_send_amount'] = $minimum_send_amount;

        return $this;
    }

    /**
     * Gets localization_key
     *
     * @return string
     */
    public function getLocalizationKey()
    {
        return $this->container['localization_key'];
    }

    /**
     * Sets localization_key
     *
     * @param string $localization_key Key to be used in conjunction with `GetPromotionDescriptions`
     *
     * @return $this
     */
    public function setLocalizationKey($localization_key)
    {
        $this->container['localization_key'] = $localization_key;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


