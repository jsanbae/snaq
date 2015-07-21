<?php
/**
 * Snaq\Negocio\Negocio
 *
 * @category   Snaq
 * @package    Snaq\Negocio
 * @copyright  
 * @license    
 * @version    0.1.0 2015-06-03 10:05:01
 */

namespace Snaq\Negocio;

use Snaq\Negocio\Personal\Trabajador;
use Snaq\Negocio\Turno\Turno;
use Snaq\Negocio\Infraestructura\Area;
use Snaq\Negocio\Carta\Carta;

class Negocio
{
	/**
	* @var Int $id Id del Negocio
	*/
	private $id;
	
	/**
	* @var Rut $rut Rut del Negocio
	*/
	private $rut;

	/**
	* @var String $razon_social Nombre de la razon social del negocio
	*/
	private $razon_social;

	/**
	* @var String $alias Nombre corto de la Razon Social
	*/
	private $alias;

	/**
	* @var array $trabajadores Array con los trabajadores del negocio
	*/
	private $trabajadores;

	/**
	 * @var array $areas Array con areas inscritas en el negocio
	 */
	private $areas;

	/**
	* @var array $turnos Array con los turnos del negocio (horarios de atencion)
	*/
	private $turnos;

	/**
	* @var Carta $carta Carta del negocio (que vende el negocio)
	*/
	private $carta;

    /**
    * @var boolean $activo Determina si la aplicación se encuentra activa o no
    */
    private $activo =  true;


    function __construct(Rut $rut, $razon_social, $id = null)
    {
    	$this->rut = $rut;
    	$this->razon_social = $razon_social;

    	if (!is_null($id)) {

			$this->id = $id;

		}
    }

	/**
	* Entrega rut del negocio
	*
	* @return Rut $rut.
	*/
	public function getRut()
	{
		return $this->rut;
	}

	/**
	* Entrega razon social del negocio
	*
	* @return String $razon_social.
	*/
	public function getRazonSocial()
	{
		return $this->razon_social;
	}


	/**
	* Contrata(inscribe) trabajador al negocio
	*
	* @param Trabajador $trabajador.
	* @param Turno $turno.
	* @return Trabajador $trabajadores.
	*/
	public function contratarTrabajador(Trabajador $trabajador)
	{
        $this->trabajadores[] = $trabajador;
	}
	

	/**
	* Entrega nomina de trabajadores del negocio
	*
	* @return array $trabajadores.
	*/
	public function listTrabajadores()
	{
		return $this->trabajadores;
	}


	/**
	* Agrega Turnos del negocio
	*
	* @return array $turnos.
	*/
	public function addTurno(Turno $turno)
	{
		array_push($this->turnos, $turno);		
		return $this->turnos;
	}


	/**
	* Entrega lista de turnos del negocio
	*
	* @return array $turnos.
	*/
	public function listTurnos()
	{
		return $this->turnos;
	}

	/**
	* Agrega Areas al negocio
	*/
	public function addArea(Area $area)
	{
		$this->areas[$area->getNombre()] = $area;
		return $this->areas;
	}


	/**
	* Entrega lista de areas del negocio
	*
	* @return array $areas.
	*/
	public function listAreas()
	{
		return $this->areas;
	}


	/**
	* Asigna la Carta al negocio
	*/
	public function setCarta(Carta $carta)
	{
		$this->carta = $carta;
	}


	/**
	* Entrega la carta del negocio
	*
	* @return Carta $carta
	*/
	public function getCarta()
	{
		return $this->carta;
	}

}