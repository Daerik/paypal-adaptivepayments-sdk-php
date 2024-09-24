<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
use PayPal\Types\Common\ErrorData;
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
	 
	 	 	 	 
	 * @var ErrorData
	 */ 
	public ErrorData $error;


}
