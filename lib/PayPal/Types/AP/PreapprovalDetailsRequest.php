<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
use PayPal\Types\Common\RequestEnvelope;
/**
 * The request to look up the details of a Preapproval. 
 */
class PreapprovalDetailsRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope
	 */ 
	public mixed $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public mixed $preapprovalKey;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var bool
	 */ 
	public bool $getBillingAddress;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $preapprovalKey = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->preapprovalKey = $preapprovalKey;
	}


}
