<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * FundingPlan describes the funding sources to be used for a
 * specific payment. 
 */
class FundingPlan  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $fundingPlanId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\Common\CurrencyType	 
	 */ 
	public \PayPal\Types\Common\CurrencyType $fundingAmount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\FundingSource	 
	 */ 
	public \PayPal\Types\AP\FundingSource $backupFundingSource;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\Common\CurrencyType	 
	 */ 
	public \PayPal\Types\Common\CurrencyType $senderFees;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\CurrencyConversion	 
	 */ 
	public \PayPal\Types\AP\CurrencyConversion $currencyConversion;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\FundingPlanCharge	 
	 */ 
	public \PayPal\Types\AP\FundingPlanCharge $charge;


}
