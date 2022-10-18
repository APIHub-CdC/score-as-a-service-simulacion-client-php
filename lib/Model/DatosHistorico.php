<?php

namespace ScoreAsAService\Client\Model;

use \ArrayAccess;
use \ScoreAsAService\Client\ObjectSerializer;

class DatosHistorico implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'DatosHistorico';
    
    protected static $apihubTypes = [
        'npers_cve' => 'string',
        'cuenta' => 'string',
        'total_ctas_abiertas' => 'string',
        'tipo_cuenta' => 'string',
        'tipo_otorgante' => 'string',
        'estatus_cuenta' => 'string',
        'credito_asignado' => 'float'
    ];
    
    protected static $apihubFormats = [
        'npers_cve' => null,
        'cuenta' => null,
        'total_ctas_abiertas' => null,
        'tipo_cuenta' => null,
        'tipo_otorgante' => null,
        'estatus_cuenta' => null,
        'credito_asignado' => null
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
        'npers_cve' => 'npersCve',
        'cuenta' => 'cuenta',
        'total_ctas_abiertas' => 'totalCtasAbiertas',
        'tipo_cuenta' => 'tipoCuenta',
        'tipo_otorgante' => 'tipoOtorgante',
        'estatus_cuenta' => 'estatusCuenta',
        'credito_asignado' => 'creditoAsignado'
    ];
    
    protected static $setters = [
        'npers_cve' => 'setNpersCve',
        'cuenta' => 'setCuenta',
        'total_ctas_abiertas' => 'setTotalCtasAbiertas',
        'tipo_cuenta' => 'setTipoCuenta',
        'tipo_otorgante' => 'setTipoOtorgante',
        'estatus_cuenta' => 'setEstatusCuenta',
        'credito_asignado' => 'setCreditoAsignado'
    ];
    
    protected static $getters = [
        'npers_cve' => 'getNpersCve',
        'cuenta' => 'getCuenta',
        'total_ctas_abiertas' => 'getTotalCtasAbiertas',
        'tipo_cuenta' => 'getTipoCuenta',
        'tipo_otorgante' => 'getTipoOtorgante',
        'estatus_cuenta' => 'getEstatusCuenta',
        'credito_asignado' => 'getCreditoAsignado'
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
        $this->container['npers_cve'] = isset($data['npers_cve']) ? $data['npers_cve'] : null;
        $this->container['cuenta'] = isset($data['cuenta']) ? $data['cuenta'] : null;
        $this->container['total_ctas_abiertas'] = isset($data['total_ctas_abiertas']) ? $data['total_ctas_abiertas'] : null;
        $this->container['tipo_cuenta'] = isset($data['tipo_cuenta']) ? $data['tipo_cuenta'] : null;
        $this->container['tipo_otorgante'] = isset($data['tipo_otorgante']) ? $data['tipo_otorgante'] : null;
        $this->container['estatus_cuenta'] = isset($data['estatus_cuenta']) ? $data['estatus_cuenta'] : null;
        $this->container['credito_asignado'] = isset($data['credito_asignado']) ? $data['credito_asignado'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['npers_cve']) && (mb_strlen($this->container['npers_cve']) > 9)) {
            $invalidProperties[] = "invalid value for 'npers_cve', the character length must be smaller than or equal to 9.";
        }
        if (!is_null($this->container['npers_cve']) && (mb_strlen($this->container['npers_cve']) < 9)) {
            $invalidProperties[] = "invalid value for 'npers_cve', the character length must be bigger than or equal to 9.";
        }
        if (!is_null($this->container['cuenta']) && (mb_strlen($this->container['cuenta']) > 50)) {
            $invalidProperties[] = "invalid value for 'cuenta', the character length must be smaller than or equal to 50.";
        }
        if (!is_null($this->container['cuenta']) && (mb_strlen($this->container['cuenta']) < 5)) {
            $invalidProperties[] = "invalid value for 'cuenta', the character length must be bigger than or equal to 5.";
        }
        if (!is_null($this->container['total_ctas_abiertas']) && (mb_strlen($this->container['total_ctas_abiertas']) > 4)) {
            $invalidProperties[] = "invalid value for 'total_ctas_abiertas', the character length must be smaller than or equal to 4.";
        }
        if (!is_null($this->container['total_ctas_abiertas']) && (mb_strlen($this->container['total_ctas_abiertas']) < 1)) {
            $invalidProperties[] = "invalid value for 'total_ctas_abiertas', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['tipo_cuenta']) && (mb_strlen($this->container['tipo_cuenta']) > 30)) {
            $invalidProperties[] = "invalid value for 'tipo_cuenta', the character length must be smaller than or equal to 30.";
        }
        if (!is_null($this->container['tipo_cuenta']) && (mb_strlen($this->container['tipo_cuenta']) < 5)) {
            $invalidProperties[] = "invalid value for 'tipo_cuenta', the character length must be bigger than or equal to 5.";
        }
        if (!is_null($this->container['tipo_otorgante']) && (mb_strlen($this->container['tipo_otorgante']) > 35)) {
            $invalidProperties[] = "invalid value for 'tipo_otorgante', the character length must be smaller than or equal to 35.";
        }
        if (!is_null($this->container['tipo_otorgante']) && (mb_strlen($this->container['tipo_otorgante']) < 5)) {
            $invalidProperties[] = "invalid value for 'tipo_otorgante', the character length must be bigger than or equal to 5.";
        }
        if (!is_null($this->container['estatus_cuenta']) && (mb_strlen($this->container['estatus_cuenta']) > 20)) {
            $invalidProperties[] = "invalid value for 'estatus_cuenta', the character length must be smaller than or equal to 20.";
        }
        if (!is_null($this->container['estatus_cuenta']) && (mb_strlen($this->container['estatus_cuenta']) < 2)) {
            $invalidProperties[] = "invalid value for 'estatus_cuenta', the character length must be bigger than or equal to 2.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getNpersCve()
    {
        return $this->container['npers_cve'];
    }
    
    public function setNpersCve($npers_cve)
    {
        if (!is_null($npers_cve) && (mb_strlen($npers_cve) > 9)) {
            throw new \InvalidArgumentException('invalid length for $npers_cve when calling DatosHistorico., must be smaller than or equal to 9.');
        }
        if (!is_null($npers_cve) && (mb_strlen($npers_cve) < 9)) {
            throw new \InvalidArgumentException('invalid length for $npers_cve when calling DatosHistorico., must be bigger than or equal to 9.');
        }
        $this->container['npers_cve'] = $npers_cve;
        return $this;
    }
    
    public function getCuenta()
    {
        return $this->container['cuenta'];
    }
    
    public function setCuenta($cuenta)
    {
        if (!is_null($cuenta) && (mb_strlen($cuenta) > 50)) {
            throw new \InvalidArgumentException('invalid length for $cuenta when calling DatosHistorico., must be smaller than or equal to 50.');
        }
        if (!is_null($cuenta) && (mb_strlen($cuenta) < 5)) {
            throw new \InvalidArgumentException('invalid length for $cuenta when calling DatosHistorico., must be bigger than or equal to 5.');
        }
        $this->container['cuenta'] = $cuenta;
        return $this;
    }
    
    public function getTotalCtasAbiertas()
    {
        return $this->container['total_ctas_abiertas'];
    }
    
    public function setTotalCtasAbiertas($total_ctas_abiertas)
    {
        if (!is_null($total_ctas_abiertas) && (mb_strlen($total_ctas_abiertas) > 4)) {
            throw new \InvalidArgumentException('invalid length for $total_ctas_abiertas when calling DatosHistorico., must be smaller than or equal to 4.');
        }
        if (!is_null($total_ctas_abiertas) && (mb_strlen($total_ctas_abiertas) < 1)) {
            throw new \InvalidArgumentException('invalid length for $total_ctas_abiertas when calling DatosHistorico., must be bigger than or equal to 1.');
        }
        $this->container['total_ctas_abiertas'] = $total_ctas_abiertas;
        return $this;
    }
    
    public function getTipoCuenta()
    {
        return $this->container['tipo_cuenta'];
    }
    
    public function setTipoCuenta($tipo_cuenta)
    {
        if (!is_null($tipo_cuenta) && (mb_strlen($tipo_cuenta) > 30)) {
            throw new \InvalidArgumentException('invalid length for $tipo_cuenta when calling DatosHistorico., must be smaller than or equal to 30.');
        }
        if (!is_null($tipo_cuenta) && (mb_strlen($tipo_cuenta) < 5)) {
            throw new \InvalidArgumentException('invalid length for $tipo_cuenta when calling DatosHistorico., must be bigger than or equal to 5.');
        }
        $this->container['tipo_cuenta'] = $tipo_cuenta;
        return $this;
    }
    
    public function getTipoOtorgante()
    {
        return $this->container['tipo_otorgante'];
    }
    
    public function setTipoOtorgante($tipo_otorgante)
    {
        if (!is_null($tipo_otorgante) && (mb_strlen($tipo_otorgante) > 35)) {
            throw new \InvalidArgumentException('invalid length for $tipo_otorgante when calling DatosHistorico., must be smaller than or equal to 35.');
        }
        if (!is_null($tipo_otorgante) && (mb_strlen($tipo_otorgante) < 5)) {
            throw new \InvalidArgumentException('invalid length for $tipo_otorgante when calling DatosHistorico., must be bigger than or equal to 5.');
        }
        $this->container['tipo_otorgante'] = $tipo_otorgante;
        return $this;
    }
    
    public function getEstatusCuenta()
    {
        return $this->container['estatus_cuenta'];
    }
    
    public function setEstatusCuenta($estatus_cuenta)
    {
        if (!is_null($estatus_cuenta) && (mb_strlen($estatus_cuenta) > 20)) {
            throw new \InvalidArgumentException('invalid length for $estatus_cuenta when calling DatosHistorico., must be smaller than or equal to 20.');
        }
        if (!is_null($estatus_cuenta) && (mb_strlen($estatus_cuenta) < 2)) {
            throw new \InvalidArgumentException('invalid length for $estatus_cuenta when calling DatosHistorico., must be bigger than or equal to 2.');
        }
        $this->container['estatus_cuenta'] = $estatus_cuenta;
        return $this;
    }
    
    public function getCreditoAsignado()
    {
        return $this->container['credito_asignado'];
    }
    
    public function setCreditoAsignado($credito_asignado)
    {
        $this->container['credito_asignado'] = $credito_asignado;
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
