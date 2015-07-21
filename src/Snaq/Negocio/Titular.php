<?php
/**
 * Snaq\Negocio\Titular
 *
 * @category   Snaq
 * @package    Snaq\Negocio
 * @copyright  
 * @license    
 * @version    0.1.0 2015-06-03 10:05:01
 */

namespace Snaq\Negocio;

use Snaq\Negocio\Persona as Persona;

class Titular
{
	private $persona;

    function __construct(Persona $persona)
    {
    	$this->persona = $persona;
    }

    public function toString()
    {
    	return 'Rut: '.$this->persona->rut->toString().' - Nombre: '.$this->persona->nombre->toString().' - Direccion: '.$this->persona->direccion->toString().' - Telefono: '.$this->persona->telefono;
    }
}