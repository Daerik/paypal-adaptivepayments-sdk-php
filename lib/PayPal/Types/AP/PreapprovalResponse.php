<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * The result of the PreapprovalRequest is a preapprovalKey. 
 */
class PreapprovalResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\Common\ResponseEnvelope	 
	 */ 
	public \PayPal\Types\Common\ResponseEnvelope $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $preapprovalKey;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\Common\ErrorData	 
	 */ 
	public \PayPal\Types\Common\ErrorData $error;


}
