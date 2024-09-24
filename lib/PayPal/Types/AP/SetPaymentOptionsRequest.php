<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
use PayPal\Types\Common\RequestEnvelope;
/**
 * The request to set the options of a payment request. 
 */
class SetPaymentOptionsRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope
	 */ 
	public RequestEnvelope $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public mixed $payKey;

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
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $payKey = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->payKey = $payKey;
	}


}
