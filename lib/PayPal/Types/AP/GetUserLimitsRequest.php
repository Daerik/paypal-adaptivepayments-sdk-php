<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
use PayPal\Types\Common\AccountIdentifier;
use PayPal\Types\Common\RequestEnvelope;
/**
 * The request to get the remaining limits for a user 
 */
class GetUserLimitsRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope
	 */ 
	public mixed $requestEnvelope;

	/**
	 * The account identifier for the user 
	 * @access public
	 
	 	 	 	 
	 * @var AccountIdentifier
	 */ 
	public mixed $user;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public mixed $country;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public mixed $currencyCode;

	/**
	 * List of limit types 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public mixed $limitType;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $user = NULL, $country = NULL, $currencyCode = NULL, $limitType = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->user = $user;
		$this->country = $country;
		$this->currencyCode = $currencyCode;
		$this->limitType = $limitType;
	}


}
