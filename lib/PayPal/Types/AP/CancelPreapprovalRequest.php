<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
use PayPal\Types\Common\RequestEnvelope;
/**
 * The request to cancel a Preapproval. 
 */
class CancelPreapprovalRequest  
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
	public mixed $preapprovalKey;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $preapprovalKey = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->preapprovalKey = $preapprovalKey;
	}


}
