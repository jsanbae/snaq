<?php
/**
 * Snaq\Negocio\Infraestructura\Area
 *
 * @category   Snaq
 * @package    Snaq\Negocio\Infraestructura
 * @copyright  
 * @license    
 * @version    0.1.0 2015-06-03 10:05:01
 */

namespace Snaq\Negocio\Infraestructura;

use Snaq\Negocio\Infraestructura\Mesa;

class Area 
{
	private $id;
	private $nombre;
	private $mesas;

	function __construct($nombre, $id = null)
	{
		$this->nombre = $nombre;

		if (!is_null($id)) {

			$this->id = $id;

		}
	}

	public function addMesa(Mesa $mesa)
	{
		$this->mesas[$mesa->getNumero()] = $mesa;
	}

	public function getMesas()
	{
		return $this->mesas;
	}

	public function getNombre()
	{
		return $this->nombre;
	}
}