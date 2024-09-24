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
 * @var InitiatingEntity
	 */ 
	public InitiatingEntity $initiatingEntity;

	/**
	 * 
	 * @access public
 * @var DisplayOptions
	 */ 
	public DisplayOptions $displayOptions;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $shippingAddressId;

	/**
	 * 
	 * @access public
 * @var SenderOptions
	 */ 
	public SenderOptions $senderOptions;

	/**
	 * 
     * @array
	 * @access public
 * @var ReceiverOptions
	 */ 
	public ReceiverOptions $receiverOptions;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData
	 */ 
	public ErrorData $error;


}
