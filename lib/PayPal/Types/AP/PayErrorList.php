<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * 
 */
class PayErrorList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\PayError	 
	 */ 
	public \PayPal\Types\AP\PayError $payError;


}
