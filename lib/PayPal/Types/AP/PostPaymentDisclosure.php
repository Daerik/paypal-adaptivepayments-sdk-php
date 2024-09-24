<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * Contains information related to Post Payment Disclosure
 * Details This contains 1.Receivers information 2.Funds
 * Avalibility Date 
 */
class PostPaymentDisclosure  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\AccountIdentifier	 
	 */ 
	public PayPal\Types\Common\AccountIdentifier $accountIdentifier;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var date	 
	 */ 
	public date $fundsAvailabilityDate;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $fundsAvailabilityDateDisclaimerText;


}
