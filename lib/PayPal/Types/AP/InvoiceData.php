<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * Describes a payment for a particular receiver (merchant),
 * contains list of additional per item details. 
 */
class InvoiceData  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
 * @var InvoiceItem
	 */ 
	public InvoiceItem $item;
	
	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double	 
	 */ 
	public float $totalTax;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double	 
	 */ 
	public float $totalShipping;


}
