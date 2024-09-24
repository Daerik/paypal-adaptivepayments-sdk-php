<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * SenderDisclosure contains the disclosure related to Sender 
 */
class SenderDisclosure  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\Common\CurrencyType	 
	 */ 
	public \PayPal\Types\Common\CurrencyType $amountToTransfer;

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
	public \PayPal\Types\Common\CurrencyType $totalAmountToTransfer;


}
