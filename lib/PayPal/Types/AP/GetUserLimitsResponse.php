<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * A response that contains a list of remaining limits 
 */
class GetUserLimitsResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\ResponseEnvelope	 
	 */ 
	public PayPal\Types\Common\ResponseEnvelope $responseEnvelope;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\AP\UserLimit	 
	 */ 
	public PayPal\Types\AP\UserLimit $userLimit;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\AP\WarningDataList	 
	 */ 
	public PayPal\Types\AP\WarningDataList $warningDataList;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\ErrorData	 
	 */ 
	public PayPal\Types\Common\ErrorData $error;


}
