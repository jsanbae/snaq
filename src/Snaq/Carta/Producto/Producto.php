<?php
/**
 * Snaq\Carta\Producto\Producto
 *
 * @category   Snaq
 * @package    Snaq\Carta\Producto
 * @copyright  
 * @license    
 * @version    0.1.0 2015-06-03 10:05:01
 */

class Producto {

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
	
	/**
	* @var CategoriaProducto $categoria Categoria del producto
	*/
	private $categoria;

	/**
	* @var int $costo Costo del producto
	*/
	private $costo;

	/**
	* @var boolean $activo Si el producto se encuentra activo o inactivo
	*/
	private $activo;

	function __construct($nombre, CategoriaProducto $categoria, $descripcion = '', $costo = 0, $activo = true, $id = null)
	{
		$this->nombre = $nombre;
		$this->categoria = $categoria;
		$this->descripcion = $descripcion;
		$this->costo = $costo;
		$this->activo = $activo;

		if (!is_null($id)) {
			$this->id = $id;
		}
	}

	public function Activar()
	{
		$this->activo = true;
	}

	public function Desactivar()
	{
		$this->activo = false;
	}

}