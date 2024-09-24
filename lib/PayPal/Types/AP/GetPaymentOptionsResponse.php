<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
use PayPal\Types\Common\ErrorData;
use PayPal\Types\Common\ResponseEnvelope;
/**
 * The response message for the GetPaymentOption request 
 */
class GetPaymentOptionsResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope
	 */ 
	public ResponseEnvelope $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\InitiatingEntity	 
	 */ 
	public \PayPal\Types\AP\InitiatingEntity $initiatingEntity;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\DisplayOptions	 
	 */ 
	public \PayPal\Types\AP\DisplayOptions $displayOptions;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $shippingAddressId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\SenderOptions	 
	 */ 
	public \PayPal\Types\AP\SenderOptions $senderOptions;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\ReceiverOptions	 
	 */ 
	public \PayPal\Types\AP\ReceiverOptions $receiverOptions;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData
	 */ 
	public ErrorData $error;


}
