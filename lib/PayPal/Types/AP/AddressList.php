<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * 
 */
class AddressList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
 * @var Address
	 */ 
	public Address $address;
	
}
