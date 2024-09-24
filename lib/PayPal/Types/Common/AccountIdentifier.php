<?php 
namespace PayPal\Types\Common;
use PayPal\Core\PPMessage;  
/**
 * 
 */
if(!class_exists('AccountIdentifier', false)) {
class AccountIdentifier  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $email;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\PhoneNumberType	 
	 */ 
	public PayPal\Types\Common\PhoneNumberType $phone;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $accountId;


}
}
