<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * The request to cancel a Preapproval. 
 */
class CancelPreapprovalRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\Common\RequestEnvelope
	 */ 
	public \PayPal\Types\Common\RequestEnvelope $requestEnvelope;

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
