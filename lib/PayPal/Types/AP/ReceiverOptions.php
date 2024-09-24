<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * Options that apply to the receiver of a payment, allows
 * setting additional details for payment using invoice. 
 */
class ReceiverOptions  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $description;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $customId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\InvoiceData	 
	 */ 
	public \PayPal\Types\AP\InvoiceData $invoiceData;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\ReceiverIdentifier	 
	 */ 
	public mixed $receiver;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $referrerCode;

	/**
	 * Constructor with arguments
	 */
	public function __construct($receiver = NULL) {
		$this->receiver = $receiver;
	}


}
