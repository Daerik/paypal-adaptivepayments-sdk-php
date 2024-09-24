<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
use PayPal\Types\Common\ErrorData;
use PayPal\Types\Common\ResponseEnvelope;
/**
 * The response to get the funding plans available for a
 * payment. 
 */
class GetFundingPlansResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope
	 */ 
	public ResponseEnvelope $responseEnvelope;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\FundingPlan	 
	 */ 
	public \PayPal\Types\AP\FundingPlan $fundingPlan;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData
	 */ 
	public ErrorData $error;


}
