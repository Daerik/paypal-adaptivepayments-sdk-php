<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * The request to get the allowed funding sources available for
 * a preapproval. 
 */
class GetAllowedFundingSourcesRequest  
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
	public mixed $key;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $key = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->key = $key;
	}


}
