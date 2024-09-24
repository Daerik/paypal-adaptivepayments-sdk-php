<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
use PayPal\Types\Common\ErrorData;
use PayPal\Types\Common\ResponseEnvelope;
/**
 * The PayResponse contains the result of the Pay operation.
 * The payKey and execution status of the request should always
 * be provided. 
 */
class PayResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope
	 */ 
	public ResponseEnvelope $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $payKey;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $paymentExecStatus;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\PayErrorList	 
	 */ 
	public \PayPal\Types\AP\PayErrorList $payErrorList;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\PaymentInfoList	 
	 */ 
	public \PayPal\Types\AP\PaymentInfoList $paymentInfoList;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\SenderIdentifier	 
	 */ 
	public \PayPal\Types\AP\SenderIdentifier $sender;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\FundingPlan	 
	 */ 
	public \PayPal\Types\AP\FundingPlan $defaultFundingPlan;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\WarningDataList	 
	 */ 
	public \PayPal\Types\AP\WarningDataList $warningDataList;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData
	 */ 
	public ErrorData $error;


}
