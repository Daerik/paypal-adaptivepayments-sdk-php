<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * Options that apply to the sender of a payment. 
 */
class SenderOptions  
  extends PPMessage   {

	/**
	 * Require the user to select a shipping address during the web
	 * flow. 
	 * @access public
	 
	 	 	 	 
	 * @var bool
	 */ 
	public bool $requireShippingAddressSelection;

	/**
	 * Determines whether or not the UI pages should display the
	 * shipping address set by user in this SetPaymentOptions
	 * request. 
	 * @access public
	 
	 	 	 	 
	 * @var bool
	 */ 
	public bool $addressOverride;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $referrerCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\ShippingAddressInfo	 
	 */ 
	public \PayPal\Types\AP\ShippingAddressInfo $shippingAddress;


}
