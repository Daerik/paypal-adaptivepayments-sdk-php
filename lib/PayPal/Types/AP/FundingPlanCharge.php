<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
use PayPal\Types\Common\CurrencyType;
/**
 * Amount to be charged to a particular funding source. 
 */
class FundingPlanCharge  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType
	 */ 
	public CurrencyType $charge;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\FundingSource	 
	 */ 
	public \PayPal\Types\AP\FundingSource $fundingSource;


}
