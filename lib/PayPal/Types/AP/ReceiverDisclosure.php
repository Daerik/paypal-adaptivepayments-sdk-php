<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * ReceiverDisclosure contains the disclosure related to
 * Receiver/Receivers. 
 */
class ReceiverDisclosure  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\Common\AccountIdentifier	 
	 */ 
	public \PayPal\Types\Common\AccountIdentifier $accountIdentifier;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\Common\CurrencyType	 
	 */ 
	public \PayPal\Types\Common\CurrencyType $amountReceivedFromSender;

	/**
	 * The two-character ISO country code of the home country of
	 * the Receiver 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $countryCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\ConversionRate	 
	 */ 
	public \PayPal\Types\AP\ConversionRate $conversionRate;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\FeeDisclosure	 
	 */ 
	public \PayPal\Types\AP\FeeDisclosure $feeDisclosure;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\Common\CurrencyType	 
	 */ 
	public \PayPal\Types\Common\CurrencyType $totalAmountReceived;


}
