<?php
/**
 * Snaq\Negocio\Nombre
 *
 * @category   Snaq
 * @package    Snaq\Negocio
 * @copyright  
 * @license    
 * @version    0.1.0 2015-06-03 10:05:01
 */

namespace Snaq\Negocio;

class Nombre 
{

	/**
	* @nombre String
	*/
	private $nombres;

	/**
	* @apellidos String
	*/
	private $apellidos;

	/**
	* @alias String
	*/
	private $alias;

	function __construct($nombres, $apellidos, $alias='')
	{
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->alias = $alias;
	}

	/**
    * Devuelve el nombre completo de la persona
    *
    * @return string
    */
    public function toString()
    {
        return $this->nombres.' '.$this->apellidos;
    }

    /**
    * Devuelve el alias la persona
    *
    * @return string
    */
    public function getAlias()
    {
        return $this->alias;
    }


}