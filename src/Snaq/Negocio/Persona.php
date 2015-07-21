<?php
/**
 * Snaq\Negocio\Persona
 *
 * @category   Snaq
 * @package    Snaq\Negocio
 * @copyright  
 * @license    
 * @version    0.1.0 2015-06-03 10:05:01
 */

namespace Snaq\Negocio;

use Snaq\Negocio\Nombre as Nombre;
use Snaq\Negocio\Rut as Rut;
use Snaq\Negocio\Direccion as Direccion;

class Persona
{

    /**
    * @rut Rut
    */
    protected $rut;

	/**
	* @nombre Nombre
	*/
	protected $nombre;

	/**
	* @direccion Direccion
	*/
	protected $direccion;

	/**
	* @telelfono String
	*/
	protected $telefono;

    function __construct(Rut $rut, Nombre $nombre, Direccion $direccion, $telefono)
    {
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
    }

  	/**
    * Devuelve el rut de la persona
    *
    * @return Rut
    */
	public function getRut()
    {
        return $this->rut;
    }

    /**
    * Devuelve el nombre de la persona
    *
    * @return Nombre
    */
	public function getNombre()
    {
        return $this->nombre;
    }


    /**
    * Devuelve la direccion de la persona
    *
    * @return Direccion
    */
	public function getDireccion()
    {
        return $this->direccion;
    }

    /**
    * Devuelve el telefono de la persona
    *
    * @return String
    */
	public function getTelefono()
    {
        return $this->telefono;
    }

}