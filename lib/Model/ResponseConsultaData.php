<?php

namespace ScoreAsAService\Client\Model;

use \ArrayAccess;
use \ScoreAsAService\Client\ObjectSerializer;

class ResponseConsultaData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'ResponseConsultaData';
    
    protected static $apihubTypes = [
        'fecha_consulta' => 'string',
        'nombre_otorgante' => 'string',
        'tipo_credito' => 'string',
        'importe_credito' => 'float',
        'clave_unidad_monetaria' => 'string',
        'cve_otorgante' => 'string',
        'desc_tipo_negocio_otor' => 'string'
    ];
    
    protected static $apihubFormats = [
        'fecha_consulta' => null,
        'nombre_otorgante' => null,
        'tipo_credito' => null,
        'importe_credito' => null,
        'clave_unidad_monetaria' => null,
        'cve_otorgante' => null,
        'desc_tipo_negocio_otor' => null
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
        'fecha_consulta' => 'FechaConsulta',
        'nombre_otorgante' => 'NombreOtorgante',
        'tipo_credito' => 'TipoCredito',
        'importe_credito' => 'ImporteCredito',
        'clave_unidad_monetaria' => 'ClaveUnidadMonetaria',
        'cve_otorgante' => 'cveOtorgante',
        'desc_tipo_negocio_otor' => 'descTipoNegocioOtor'
    ];
    
    protected static $setters = [
        'fecha_consulta' => 'setFechaConsulta',
        'nombre_otorgante' => 'setNombreOtorgante',
        'tipo_credito' => 'setTipoCredito',
        'importe_credito' => 'setImporteCredito',
        'clave_unidad_monetaria' => 'setClaveUnidadMonetaria',
        'cve_otorgante' => 'setCveOtorgante',
        'desc_tipo_negocio_otor' => 'setDescTipoNegocioOtor'
    ];
    
    protected static $getters = [
        'fecha_consulta' => 'getFechaConsulta',
        'nombre_otorgante' => 'getNombreOtorgante',
        'tipo_credito' => 'getTipoCredito',
        'importe_credito' => 'getImporteCredito',
        'clave_unidad_monetaria' => 'getClaveUnidadMonetaria',
        'cve_otorgante' => 'getCveOtorgante',
        'desc_tipo_negocio_otor' => 'getDescTipoNegocioOtor'
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
        $this->container['fecha_consulta'] = isset($data['fecha_consulta']) ? $data['fecha_consulta'] : null;
        $this->container['nombre_otorgante'] = isset($data['nombre_otorgante']) ? $data['nombre_otorgante'] : null;
        $this->container['tipo_credito'] = isset($data['tipo_credito']) ? $data['tipo_credito'] : null;
        $this->container['importe_credito'] = isset($data['importe_credito']) ? $data['importe_credito'] : null;
        $this->container['clave_unidad_monetaria'] = isset($data['clave_unidad_monetaria']) ? $data['clave_unidad_monetaria'] : null;
        $this->container['cve_otorgante'] = isset($data['cve_otorgante']) ? $data['cve_otorgante'] : null;
        $this->container['desc_tipo_negocio_otor'] = isset($data['desc_tipo_negocio_otor']) ? $data['desc_tipo_negocio_otor'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['fecha_consulta']) && (mb_strlen($this->container['fecha_consulta']) > 10)) {
            $invalidProperties[] = "invalid value for 'fecha_consulta', the character length must be smaller than or equal to 10.";
        }
        if (!is_null($this->container['fecha_consulta']) && (mb_strlen($this->container['fecha_consulta']) < 10)) {
            $invalidProperties[] = "invalid value for 'fecha_consulta', the character length must be bigger than or equal to 10.";
        }
        if (!is_null($this->container['nombre_otorgante']) && (mb_strlen($this->container['nombre_otorgante']) > 40)) {
            $invalidProperties[] = "invalid value for 'nombre_otorgante', the character length must be smaller than or equal to 40.";
        }
        if (!is_null($this->container['nombre_otorgante']) && (mb_strlen($this->container['nombre_otorgante']) < 5)) {
            $invalidProperties[] = "invalid value for 'nombre_otorgante', the character length must be bigger than or equal to 5.";
        }
        if (!is_null($this->container['tipo_credito']) && (mb_strlen($this->container['tipo_credito']) > 2)) {
            $invalidProperties[] = "invalid value for 'tipo_credito', the character length must be smaller than or equal to 2.";
        }
        if (!is_null($this->container['tipo_credito']) && (mb_strlen($this->container['tipo_credito']) < 1)) {
            $invalidProperties[] = "invalid value for 'tipo_credito', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['clave_unidad_monetaria']) && (mb_strlen($this->container['clave_unidad_monetaria']) > 3)) {
            $invalidProperties[] = "invalid value for 'clave_unidad_monetaria', the character length must be smaller than or equal to 3.";
        }
        if (!is_null($this->container['clave_unidad_monetaria']) && (mb_strlen($this->container['clave_unidad_monetaria']) < 1)) {
            $invalidProperties[] = "invalid value for 'clave_unidad_monetaria', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['cve_otorgante']) && (mb_strlen($this->container['cve_otorgante']) > 14)) {
            $invalidProperties[] = "invalid value for 'cve_otorgante', the character length must be smaller than or equal to 14.";
        }
        if (!is_null($this->container['cve_otorgante']) && (mb_strlen($this->container['cve_otorgante']) < 6)) {
            $invalidProperties[] = "invalid value for 'cve_otorgante', the character length must be bigger than or equal to 6.";
        }
        if (!is_null($this->container['desc_tipo_negocio_otor']) && (mb_strlen($this->container['desc_tipo_negocio_otor']) > 30)) {
            $invalidProperties[] = "invalid value for 'desc_tipo_negocio_otor', the character length must be smaller than or equal to 30.";
        }
        if (!is_null($this->container['desc_tipo_negocio_otor']) && (mb_strlen($this->container['desc_tipo_negocio_otor']) < 5)) {
            $invalidProperties[] = "invalid value for 'desc_tipo_negocio_otor', the character length must be bigger than or equal to 5.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getFechaConsulta()
    {
        return $this->container['fecha_consulta'];
    }
    
    public function setFechaConsulta($fecha_consulta)
    {
        if (!is_null($fecha_consulta) && (mb_strlen($fecha_consulta) > 10)) {
            throw new \InvalidArgumentException('invalid length for $fecha_consulta when calling ResponseConsultaData., must be smaller than or equal to 10.');
        }
        if (!is_null($fecha_consulta) && (mb_strlen($fecha_consulta) < 10)) {
            throw new \InvalidArgumentException('invalid length for $fecha_consulta when calling ResponseConsultaData., must be bigger than or equal to 10.');
        }
        $this->container['fecha_consulta'] = $fecha_consulta;
        return $this;
    }
    
    public function getNombreOtorgante()
    {
        return $this->container['nombre_otorgante'];
    }
    
    public function setNombreOtorgante($nombre_otorgante)
    {
        if (!is_null($nombre_otorgante) && (mb_strlen($nombre_otorgante) > 40)) {
            throw new \InvalidArgumentException('invalid length for $nombre_otorgante when calling ResponseConsultaData., must be smaller than or equal to 40.');
        }
        if (!is_null($nombre_otorgante) && (mb_strlen($nombre_otorgante) < 5)) {
            throw new \InvalidArgumentException('invalid length for $nombre_otorgante when calling ResponseConsultaData., must be bigger than or equal to 5.');
        }
        $this->container['nombre_otorgante'] = $nombre_otorgante;
        return $this;
    }
    
    public function getTipoCredito()
    {
        return $this->container['tipo_credito'];
    }
    
    public function setTipoCredito($tipo_credito)
    {
        if (!is_null($tipo_credito) && (mb_strlen($tipo_credito) > 2)) {
            throw new \InvalidArgumentException('invalid length for $tipo_credito when calling ResponseConsultaData., must be smaller than or equal to 2.');
        }
        if (!is_null($tipo_credito) && (mb_strlen($tipo_credito) < 1)) {
            throw new \InvalidArgumentException('invalid length for $tipo_credito when calling ResponseConsultaData., must be bigger than or equal to 1.');
        }
        $this->container['tipo_credito'] = $tipo_credito;
        return $this;
    }
    
    public function getImporteCredito()
    {
        return $this->container['importe_credito'];
    }
    
    public function setImporteCredito($importe_credito)
    {
        $this->container['importe_credito'] = $importe_credito;
        return $this;
    }
    
    public function getClaveUnidadMonetaria()
    {
        return $this->container['clave_unidad_monetaria'];
    }
    
    public function setClaveUnidadMonetaria($clave_unidad_monetaria)
    {
        if (!is_null($clave_unidad_monetaria) && (mb_strlen($clave_unidad_monetaria) > 3)) {
            throw new \InvalidArgumentException('invalid length for $clave_unidad_monetaria when calling ResponseConsultaData., must be smaller than or equal to 3.');
        }
        if (!is_null($clave_unidad_monetaria) && (mb_strlen($clave_unidad_monetaria) < 1)) {
            throw new \InvalidArgumentException('invalid length for $clave_unidad_monetaria when calling ResponseConsultaData., must be bigger than or equal to 1.');
        }
        $this->container['clave_unidad_monetaria'] = $clave_unidad_monetaria;
        return $this;
    }
    
    public function getCveOtorgante()
    {
        return $this->container['cve_otorgante'];
    }
    
    public function setCveOtorgante($cve_otorgante)
    {
        if (!is_null($cve_otorgante) && (mb_strlen($cve_otorgante) > 14)) {
            throw new \InvalidArgumentException('invalid length for $cve_otorgante when calling ResponseConsultaData., must be smaller than or equal to 14.');
        }
        if (!is_null($cve_otorgante) && (mb_strlen($cve_otorgante) < 6)) {
            throw new \InvalidArgumentException('invalid length for $cve_otorgante when calling ResponseConsultaData., must be bigger than or equal to 6.');
        }
        $this->container['cve_otorgante'] = $cve_otorgante;
        return $this;
    }
    
    public function getDescTipoNegocioOtor()
    {
        return $this->container['desc_tipo_negocio_otor'];
    }
    
    public function setDescTipoNegocioOtor($desc_tipo_negocio_otor)
    {
        if (!is_null($desc_tipo_negocio_otor) && (mb_strlen($desc_tipo_negocio_otor) > 30)) {
            throw new \InvalidArgumentException('invalid length for $desc_tipo_negocio_otor when calling ResponseConsultaData., must be smaller than or equal to 30.');
        }
        if (!is_null($desc_tipo_negocio_otor) && (mb_strlen($desc_tipo_negocio_otor) < 5)) {
            throw new \InvalidArgumentException('invalid length for $desc_tipo_negocio_otor when calling ResponseConsultaData., must be bigger than or equal to 5.');
        }
        $this->container['desc_tipo_negocio_otor'] = $desc_tipo_negocio_otor;
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
