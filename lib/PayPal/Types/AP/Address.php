<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * 
 */
class Address  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $addresseeName;

	/**
	 *
	 * @access public
	 
	 
	 * @var \PayPal\Types\Common\BaseAddress
	 */
	public \PayPal\Types\Common\BaseAddress $baseAddress;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $addressId;


}
