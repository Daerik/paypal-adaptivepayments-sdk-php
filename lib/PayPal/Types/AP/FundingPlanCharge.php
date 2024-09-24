<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * Amount to be charged to a particular funding source. 
 */
class FundingPlanCharge  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\Common\CurrencyType	 
	 */ 
	public \PayPal\Types\Common\CurrencyType $charge;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\FundingSource	 
	 */ 
	public \PayPal\Types\AP\FundingSource $fundingSource;


}
