<?php

namespace ScoreAsAService\Client\Model;

use \ArrayAccess;
use \ScoreAsAService\Client\ObjectSerializer;

class Error implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Error';
    
    protected static $apihubTypes = [
        'codigo' => 'string',
        'mensaje' => 'string'
    ];
    
    protected static $apihubFormats = [
        'codigo' => null,
        'mensaje' => null
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
        'codigo' => 'codigo',
        'mensaje' => 'mensaje'
    ];
    
    protected static $setters = [
        'codigo' => 'setCodigo',
        'mensaje' => 'setMensaje'
    ];
    
    protected static $getters = [
        'codigo' => 'getCodigo',
        'mensaje' => 'getMensaje'
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
        $this->container['codigo'] = isset($data['codigo']) ? $data['codigo'] : null;
        $this->container['mensaje'] = isset($data['mensaje']) ? $data['mensaje'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['codigo']) && (mb_strlen($this->container['codigo']) > 5)) {
            $invalidProperties[] = "invalid value for 'codigo', the character length must be smaller than or equal to 5.";
        }
        if (!is_null($this->container['codigo']) && (mb_strlen($this->container['codigo']) < 3)) {
            $invalidProperties[] = "invalid value for 'codigo', the character length must be bigger than or equal to 3.";
        }
        if (!is_null($this->container['mensaje']) && (mb_strlen($this->container['mensaje']) > 30)) {
            $invalidProperties[] = "invalid value for 'mensaje', the character length must be smaller than or equal to 30.";
        }
        if (!is_null($this->container['mensaje']) && (mb_strlen($this->container['mensaje']) < 4)) {
            $invalidProperties[] = "invalid value for 'mensaje', the character length must be bigger than or equal to 4.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getCodigo()
    {
        return $this->container['codigo'];
    }
    
    public function setCodigo($codigo)
    {
        if (!is_null($codigo) && (mb_strlen($codigo) > 5)) {
            throw new \InvalidArgumentException('invalid length for $codigo when calling Error., must be smaller than or equal to 5.');
        }
        if (!is_null($codigo) && (mb_strlen($codigo) < 3)) {
            throw new \InvalidArgumentException('invalid length for $codigo when calling Error., must be bigger than or equal to 3.');
        }
        $this->container['codigo'] = $codigo;
        return $this;
    }
    
    public function getMensaje()
    {
        return $this->container['mensaje'];
    }
    
    public function setMensaje($mensaje)
    {
        if (!is_null($mensaje) && (mb_strlen($mensaje) > 30)) {
            throw new \InvalidArgumentException('invalid length for $mensaje when calling Error., must be smaller than or equal to 30.');
        }
        if (!is_null($mensaje) && (mb_strlen($mensaje) < 4)) {
            throw new \InvalidArgumentException('invalid length for $mensaje when calling Error., must be bigger than or equal to 4.');
        }
        $this->container['mensaje'] = $mensaje;
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
