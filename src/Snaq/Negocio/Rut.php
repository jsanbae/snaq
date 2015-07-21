<?php
/**
 * Snaq\Negocio\Rut
 *
 * @category   Snaq
 * @package    Snaq\Negocio
 * @copyright  
 * @license    
 * @version    0.1.0 2015-06-03 10:05:01
 */

namespace Snaq\Negocio;

class Rut 
{

    private $rut;
    private $dv;

    function __construct($rut, $dv)
    {
        $this->rut = $rut;  
        $this->dv = $dv;  
    }

    public function isValid()
    {
    	return $this->validateRut($this);
    }

    public function toString()
    {
    	return $this->rut.'-'.$this->dv;
    }

    private function validateRut(Rut $rut)
    {
    	return $valid;
    }
}