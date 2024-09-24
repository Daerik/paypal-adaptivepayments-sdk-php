<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * FundingTypeInfo represents one allowed funding type. 
 */
class FundingTypeInfo  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $fundingType;

	/**
	 * Constructor with arguments
	 */
	public function __construct($fundingType = NULL) {
		$this->fundingType = $fundingType;
	}


}
