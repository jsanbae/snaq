<?php
/**
 * Snaq\Negocio\Infraestructura\Mesa
 *
 * @category   Snaq
 * @package    Snaq\Negocio\Infraestructura
 * @copyright  
 * @license    
 * @version    0.1.0 2015-06-03 10:05:01
 */

namespace Snaq\Negocio\Infraestructura;

class Mesa 
{
	private $id;
	private $numero;

	function __construct($numero, $id = null)
	{
		$this->numero = $numero;

		if (!is_null($id)) {
			$this->id = $id;
		}
	}
	/*
	Retorna el numero de mesa
	 */
	public function getNumero()
	{
		return $this->numero;
	}

}