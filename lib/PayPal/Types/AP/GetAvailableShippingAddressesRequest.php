<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
use PayPal\Types\Common\RequestEnvelope;
/**
 * The request to get the addresses available for a payment. 
 */
class GetAvailableShippingAddressesRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope
	 */ 
	public RequestEnvelope $requestEnvelope;

	/**
	 * The key for which to provide the available addresses. Key
	 * can be an AdaptivePayments key such as payKey or
	 * preapprovalKey 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public mixed $key;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $key = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->key = $key;
	}


}
