<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
use PayPal\Types\Common\BaseAddress;
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
	 
	 
	 * @var BaseAddress
	 */
	public BaseAddress $baseAddress;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $addressId;


}
