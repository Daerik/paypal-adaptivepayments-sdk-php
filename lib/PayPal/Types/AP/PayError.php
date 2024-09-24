<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * The error that resulted from an attempt to make a payment to
 * a receiver. 
 */
class PayError  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\Receiver	 
	 */ 
	public \PayPal\Types\AP\Receiver $receiver;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\Common\ErrorData	 
	 */ 
	public \PayPal\Types\Common\ErrorData $error;


}
