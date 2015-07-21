<?php
/**
 * Snaq\Negocio\Turno\Turno
 *
 * @category   Snaq
 * @package    Snaq\Negocio\Turno
 * @copyright  
 * @license    
 * @version    0.1.0 2015-06-03 10:05:01
 */

namespace Snaq\Negocio\Turno;

class Turno
{
    private $nombre;
    private $inicio;
    private $fin;

	function __construct($nombre, $inicio, $fin)
	{
        $this->nombre = $nombre;
        $this->inicio = $inicio;
        $this->fin = $fin;
	}

	public function toString()
	{
        return 'Turno: '.$this->nombre.' desde '.$this->inicio.' hasta '.$this->fin;
	}
}
