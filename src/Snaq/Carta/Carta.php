<?php
/**
 * Snaq\Carta\Carta
 *
 * @category   Snaq
 * @package    Snaq\Carta
 * @copyright  
 * @license    
 * @version    0.1.0 2015-06-03 10:05:01
 */

namespace Snaq\Carta;

use Snaq\Carta\ProductoEnCarta;

class Carta 
{
	private $productos;

	public function addProducto(ProductoEnCarta $producto)
	{
		$this->productos[] = $producto;
	}

	public function getProductos() 
	{
		return $this->productos;
	}
}