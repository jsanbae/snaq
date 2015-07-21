<?php
/**
 * Snaq\Negocio\Personal\Trabajador
 *
 * @category   Snaq
 * @package    Snaq\Negocio\Personal
 * @copyright  
 * @license    
 * @version    0.1.0 2015-06-03 10:05:01
 */

namespace Snaq\Negocio\Personal;

use Snaq\Negocio\Turno\Turno;
use Snaq\Negocio\Persona;

abstract class Trabajador
{
	
	protected $persona;
	protected $turno;

	function __construct(Persona $persona)
    {
    	$this->persona = $persona;
    }


	/**
	* Entrega turno del trabajador
	*
	* @return Turno $turno.
	*/
	public function getTurno()
	{
		return $this->turno;
	}

    /**
    * Asigna el turno al trabajador
    * @param  Turno  $turno Turno en el que trabajará
    */
	public function assignTurno(Turno $turno)
	{
		$this->turno = $turno;
	}

}