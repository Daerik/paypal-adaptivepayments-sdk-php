<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
use PayPal\Types\Common\CurrencyType;
/**
 * SenderDisclosure contains the disclosure related to Sender 
 */
class SenderDisclosure  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType
	 */ 
	public CurrencyType $amountToTransfer;

	/**
	 * 
	 * @access public
 * @var FeeDisclosure
	 */ 
	public FeeDisclosure $feeDisclosure;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType
	 */ 
	public CurrencyType $totalAmountToTransfer;


}
