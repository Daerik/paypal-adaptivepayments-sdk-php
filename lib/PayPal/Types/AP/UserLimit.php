<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * 
 */
class UserLimit  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $limitType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\Common\CurrencyType	 
	 */ 
	public \PayPal\Types\Common\CurrencyType $limitAmount;


}
