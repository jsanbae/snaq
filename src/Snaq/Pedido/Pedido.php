<? 
/**
 * Snaq/Pedido/Pedido
 *
 * @category   Snaq
 * @package    Snaq/Pedido
 * @copyright  
 * @license    
 * @version    0.1.0 2015-06-03 10:05:01
 */

interface Pedido {
	/**
	* @var int $id
	*/
	private $id;

	/**
	* @var TipoPedido $tipo Tipo de pedido
	*/
	private $tipo;
	
	/**
	* @var FormaPago $forma_pago Forma de pago
	*/
	private $forma_pago;
	
	/**
	* @var Negocio $negocio Negocio en el cual se realizó el pedido
	*/
	private $negocio;
	
	/**
	* @var Cliente $cliente Cliente quien realizo la compra
	*/
	private $cliente;

	/**
	* @var array $detalle Detalle del pedido
	*/
	private $detalle;

	/**
	* @var int $total Total del pedido
	*/
	private $total;

	/**
	* Entrega el numero del pedido
	*
	* @return int Retorna el numero del pedido
	*/
	public function getNumero();

	/**
	* Entrega el numero del pedido
	*
	* @return TipoPedido Retorna el tipo del pedido
	*/
	public function getTipo();

	/**
	* Asigna el tipo de pedido
	*
	* Se asigna el tipo del pedido, por ejemplo si es para Servir, Llevar, Delivery, etc.
	*
	* @param $tipo TipoPedido
	* @return Pedido Retorna el pedido
	*/
	public function setTipo(TipoPedido $tipo);

	/**
	* Entrega el numero del pedido
	*
	* @return TipoPedido Retorna el tipo del pedido
	*/
	public function getFormaPago();

	/**
	* Asigna la forma de pago del pedido
	*
	* Se asigna la forma de pago del pedido, por ejemplo si es para Efectivo, Debito, Credito, Cheque, etc.
	*
	* @param $forma_pago FormaPago
	* @return Pedido Retorna el pedido
	*/
	public function setFormaPago(FormaPago $forma_pago);

	/**
	* Entrega el Negocio del pedido
	*
	* @return Negocio Retorna el Negocio del pedido en el cual fue realizado
	*/
	public function getNegocio();

	/**
	* Asigna el Negocio del pedido
	*
	* Se asigna el Negocio en el cual se realizo el pedido.
	*
	* @param $negocio Negocio
	* @return Pedido Retorna el pedido
	*/
	public function setLocal(Negocio $negocio);

	/**
	* Entrega el cliente del pedido
	*
	* @return Cliente Retorna el cliente quien hizo el pedido
	*/
	public function getCliente();

	/**
	* Asigna el Cliente del pedido
	*
	* Se asigna el Cliente en el cual pidio el pedido.
	*
	* @param $cliente Cliente
	* @return Pedido Retorna el pedido
	*/
	public function setCliente(Cliente $cliente);

	/**
	* Añade detalle al pedido
	*
	* Añade detalle al pedido, producto y cantidad.
	*
	* @param $producto Producto
	* @param $cantidad float
	* @return Pedido Retorna el pedido
	*/
	public function agregaDetalle(Producto $producto, $cantidad);

	/**
	* Entrega el detalle del pedido
	*
	* @return array Retorna el detalle del pedido
	*/
	public function getDetalle();

	/**
	* Entrega el total del pedido
	*
	* @return int Retorna el total del pedido
	*/
	public function getTotal();

}