<?php
error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', 1);

// autoload function
function __autoload($class) {

	$root = dirname(dirname(__FILE__));

	// Define path to application directory
	defined('APPLICATION_PATH') || define('APPLICATION_PATH', $root . '/src');

	//echo APPLICATION_PATH;

	// convert namespace to full file path
	$class = APPLICATION_PATH . '/' . str_replace('\\', '/', $class) . '.php';
	require_once($class);

}

//definicion del negocio
$monica = new Snaq\Negocio\Persona(new Snaq\Negocio\Rut(6714415, 5), new Snaq\Negocio\Nombre('Monica Loreto', 'Fernandez Pollmann', 'Monica'), new Snaq\Negocio\Direccion('Alberdi', 101, 'Valparaiso', 'Valparaiso', 'Chile'), '87112216');

$titular = new Snaq\Negocio\Titular($monica);

$negocio = new Snaq\Negocio\Negocio(new Snaq\Negocio\Rut(85077100, 6), "PEFER");

//definicion de infraestructura del negocio
$mesa1 = new Snaq\Negocio\Infraestructura\Mesa(1);
$mesa2 = new Snaq\Negocio\Infraestructura\Mesa(2);
$mesa3 = new Snaq\Negocio\Infraestructura\Mesa(3);
$mesa4 = new Snaq\Negocio\Infraestructura\Mesa(4);

$area1 = new Snaq\Negocio\Infraestructura\Area('Patio');
$area1->addMesa($mesa1);
$area1->addMesa($mesa2);

$area2 = new Snaq\Negocio\Infraestructura\Area('Interior');
$area2->addMesa($mesa3);
$area2->addMesa($mesa4);

$negocio->addArea($area1);
$negocio->addArea($area2);

//definicion de personal
$javier = new Snaq\Negocio\Persona(new Snaq\Negocio\Rut(16678219, 8), new Snaq\Negocio\Nombre('Javier Alejandro', 'Sanchez Baeza', 'Jsan'), new Snaq\Negocio\Direccion('Alberdi', 101, 'Valparaiso', 'Valparaiso', 'Chile'), '87112216');

$administrador = new Snaq\Negocio\Personal\Administrador($javier);

$turno = new Snaq\Negocio\Turno\Turno('TODO', '06:00:00', '00:00:00');

$administrador->assignTurno($turno);

$negocio->contratarTrabajador($administrador);

//carta
$carta = new Snaq\Carta\Carta();

//creacion del negocio
$contrato = new Snaq\Negocio\Contrato($titular);
$contrato->addNegocio(new Snaq\Negocio\NegocioInscrito($negocio, '2015-06-01', 5));

var_dump($contrato->listNegocios());
echo '<br />';
//var_dump($contrato->tieneNegocios());
echo '<br />';
$contrato->removeNegocio($negocio);
//var_dump($contrato->listNegocios());
echo '<br />';
//var_dump($contrato->tieneNegocios());


