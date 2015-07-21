<?php
/**
 * Snaq\Negocio\Direccion
 *
 * @category   Snaq
 * @package    Snaq\Negocio
 * @copyright  
 * @license    
 * @version    0.1.0 2015-06-03 10:05:01
 */

namespace Snaq\Negocio;

class Direccion
{

    private $calle;
    private $numero;
    private $comuna; 
    private $ciudad;
    private $pais;

	function __construct($calle, $numero, $comuna, $ciudad, $pais)
	{
		$this->calle = $calle;
		$this->numero = $numero;
		$this->comuna = $comuna;
		$this->ciudad = $ciudad;
		$this->pais = $pais;
	}

	public function toString()
	{
		return $this->calle.', '.$this->numero.', '.$this->comuna.', '.$this->ciudad.', '.$this->pais;
	}
}