<?php
/**
 * TransferId
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
 * TransferId Class Doc Comment
 *
 * @category Class
 * @package  Parenthesis\DingConnect
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransferId implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransferId';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transfer_ref' => 'string',
        'distributor_ref' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transfer_ref' => null,
        'distributor_ref' => null
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
        'transfer_ref' => 'TransferRef',
        'distributor_ref' => 'DistributorRef'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transfer_ref' => 'setTransferRef',
        'distributor_ref' => 'setDistributorRef'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transfer_ref' => 'getTransferRef',
        'distributor_ref' => 'getDistributorRef'
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
        $this->container['transfer_ref'] = isset($data['transfer_ref']) ? $data['transfer_ref'] : null;
        $this->container['distributor_ref'] = isset($data['distributor_ref']) ? $data['distributor_ref'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['transfer_ref'] === null) {
            $invalidProperties[] = "'transfer_ref' can't be null";
        }
        if ($this->container['distributor_ref'] === null) {
            $invalidProperties[] = "'distributor_ref' can't be null";
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
     * Gets transfer_ref
     *
     * @return string
     */
    public function getTransferRef()
    {
        return $this->container['transfer_ref'];
    }

    /**
     * Sets transfer_ref
     *
     * @param string $transfer_ref The unique identifier for the transfer within our system
     *
     * @return $this
     */
    public function setTransferRef($transfer_ref)
    {
        $this->container['transfer_ref'] = $transfer_ref;

        return $this;
    }

    /**
     * Gets distributor_ref
     *
     * @return string
     */
    public function getDistributorRef()
    {
        return $this->container['distributor_ref'];
    }

    /**
     * Sets distributor_ref
     *
     * @param string $distributor_ref The distributor's identifier for the transfer.
     *
     * @return $this
     */
    public function setDistributorRef($distributor_ref)
    {
        $this->container['distributor_ref'] = $distributor_ref;

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


