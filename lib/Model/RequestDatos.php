<?php

namespace ScoreAsAService\Client\Model;

use \ArrayAccess;
use \ScoreAsAService\Client\ObjectSerializer;

class RequestDatos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'RequestDatos';
    
    protected static $apihubTypes = [
        'nperscve' => 'string'
    ];
    
    protected static $apihubFormats = [
        'nperscve' => null
    ];
    
    public static function apihubTypes()
    {
        return self::$apihubTypes;
    }
    
    public static function apihubFormats()
    {
        return self::$apihubFormats;
    }
    
    protected static $attributeMap = [
        'nperscve' => 'nperscve'
    ];
    
    protected static $setters = [
        'nperscve' => 'setNperscve'
    ];
    
    protected static $getters = [
        'nperscve' => 'getNperscve'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$apihubModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['nperscve'] = isset($data['nperscve']) ? $data['nperscve'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nperscve'] === null) {
            $invalidProperties[] = "'nperscve' can't be null";
        }
        if ((mb_strlen($this->container['nperscve']) > 9)) {
            $invalidProperties[] = "invalid value for 'nperscve', the character length must be smaller than or equal to 9.";
        }
        if ((mb_strlen($this->container['nperscve']) < 9)) {
            $invalidProperties[] = "invalid value for 'nperscve', the character length must be bigger than or equal to 9.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getNperscve()
    {
        return $this->container['nperscve'];
    }
    
    public function setNperscve($nperscve)
    {
        if ((mb_strlen($nperscve) > 9)) {
            throw new \InvalidArgumentException('invalid length for $nperscve when calling RequestDatos., must be smaller than or equal to 9.');
        }
        if ((mb_strlen($nperscve) < 9)) {
            throw new \InvalidArgumentException('invalid length for $nperscve when calling RequestDatos., must be bigger than or equal to 9.');
        }
        $this->container['nperscve'] = $nperscve;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
