<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * The result of a payment execution. 
 */
class ExecutePaymentResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\Common\ResponseEnvelope	 
	 */ 
	public \PayPal\Types\Common\ResponseEnvelope $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $paymentExecStatus;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\PayErrorList	 
	 */ 
	public \PayPal\Types\AP\PayErrorList $payErrorList;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\PostPaymentDisclosureList	 
	 */ 
	public \PayPal\Types\AP\PostPaymentDisclosureList $postPaymentDisclosureList;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\Common\ErrorData	 
	 */ 
	public \PayPal\Types\Common\ErrorData $error;


}
