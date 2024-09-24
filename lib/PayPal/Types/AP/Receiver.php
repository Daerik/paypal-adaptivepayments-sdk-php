<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * Receiver is the party where funds are transferred to. A
 * primary receiver receives a payment directly from the sender
 * in a chained split payment. A primary receiver should not be
 * specified when making a single or parallel split payment. 
 */
class Receiver  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double	 
	 */ 
	public mixed $amount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $email;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\Common\PhoneNumberType	 
	 */ 
	public \PayPal\Types\Common\PhoneNumberType $phone;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var bool
	 */ 
	public bool $primary;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $invoiceId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $paymentType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $paymentSubType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $accountId;

	/**
	 * Constructor with arguments
	 */
	public function __construct($amount = NULL) {
		$this->amount = $amount;
	}


}
