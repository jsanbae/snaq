<?php 
/**
 * Snaq\Negocio\Contrato
 *
 * @category   Snaq
 * @package    Snaq\Negocio
 * @copyright  
 * @license    
 * @version    0.1.0 2015-06-03 10:05:01
 */

namespace Snaq\Negocio;

class Contrato
{
    /**
    * @var String $fecha_contrato Fecha del contrato del uso del sistema
    */
	private $titular;

	/**
    * @var String $fecha_contrato Fecha del contrato del uso del sistema
    */
    private $negocios;

    function __construct(Titular $titular)
    {
        $this->titular = $titular;
    }

    public function addNegocio(NegocioInscrito $negocio)
    {
        $this->negocios[] = $negocio;

        return $this->negocios;
    }

    public function removeNegocio(Negocio $negocio)
    {
    	$key = 0;
    	
        foreach ($this->negocios as $negocioinscrito) 
        {
            if ($negocioinscrito->getNegocio() === $negocio)
            {
                unset($this->negocios[$key]);
            }
            $key++;
        }

        return $this->negocios;
    }

    public function tieneNegocios()
    {
        return !empty($this->negocios);
    }

    public function listNegocios()
    {
        return $this->negocios;
    }
}