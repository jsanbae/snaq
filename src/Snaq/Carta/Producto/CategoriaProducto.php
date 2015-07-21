<?php
/**
 * Snaq\Carta\Producto\CategoriaProducto
 *
 * @category   Snaq
 * @package    Snaq\Carta\Producto
 * @copyright  
 * @license    
 * @version    0.1.0 2015-06-03 10:05:01
 */

class CategoriaProducto {

	/**
	* @var int $id Identificador del Producto
	*/
	private $id;

	/**
	* @var string $nombre Nombre del Producto
	*/
	private $nombre;

	/**
	* @var string $descripcion Descripcion del producto
	*/
	private $descripcion;
	

	function __construct($nombre, $descripcion = '', $id = null)
	{
		$this->nombre = $nombre;
		$this->descripcion = $descripcion;

		if (!is_null($id)) {
			$this->id = $id;
		}
	}

}