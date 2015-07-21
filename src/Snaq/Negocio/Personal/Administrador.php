<?php
/**
 * Snaq\Negocio\Personal\Administrador
 *
 * @category   Snaq
 * @package    Snaq\Negocio\Personal
 * @copyright  
 * @license    
 * @version    0.1.0 2015-06-03 10:05:01
 */

namespace Snaq\Negocio\Personal;

use Snaq\Negocio\Personal\Trabajador;
use Snaq\Negocio\Personal\Cargos\IAdministrador;
use Snaq\Negocio\Persona;

class Administrador extends Trabajador implements IAdministrador
{

    function __construct(Persona $persona)
    {
    	parent::__construct($persona);
    }

}