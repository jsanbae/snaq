<?php
/**
 * Snaq\Carta\ProductoEnCarta
 *
 * @category   Snaq
 * @package    Snaq\Carta
 * @copyright  
 * @license    
 * @version    0.1.0 2015-06-03 10:05:01
 */

namespace Snaq\Carta;

class ProductoEnCarta
{
	private $producto;
	private $precio;
	private $cantidad;

	function __construct(Producto $producto, $cantidad, $precio)
	{
		$this->producto = $producto;
		$this->cantidad = $cantidad;
		$this->precio = $precio;
	}
}