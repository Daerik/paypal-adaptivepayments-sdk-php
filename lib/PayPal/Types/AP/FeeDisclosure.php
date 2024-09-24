<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * FeeDisclosure contains the information related to Fees and
 * taxes. 
 */
class FeeDisclosure  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\Common\CurrencyType	 
	 */ 
	public \PayPal\Types\Common\CurrencyType $fee;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\Common\CurrencyType	 
	 */ 
	public \PayPal\Types\Common\CurrencyType $taxes;


}
