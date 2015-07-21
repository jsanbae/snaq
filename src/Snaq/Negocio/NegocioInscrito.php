<?php
/**
 * Snaq\Negocio\NegocioInscrito
 *
 * @category   Snaq
 * @package    Snaq\Negocio
 * @copyright  
 * @license    
 * @version    0.1.0 2015-06-03 10:05:01
 */

namespace Snaq\Negocio;

class NegocioInscrito 
{
	private $negocio;
	private $fecha_contrato;
	private $dia_pago;

	function __construct(Negocio $negocio, $fecha_contrato, $dia_pago)
	{
        $this->negocio = $negocio;
        $this->fecha_contrato = $fecha_contrato;
        $this->dia_pago = $dia_pago;
	}

	public function getNegocio()
	{
		return $this->negocio;
	}
}