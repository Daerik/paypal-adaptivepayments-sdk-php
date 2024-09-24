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
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $payKey = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->payKey = $payKey;
	}


}
