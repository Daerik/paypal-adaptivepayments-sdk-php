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
 * @var PayErrorList
	 */ 
	public PayErrorList $payErrorList;

	/**
	 * 
	 * @access public
 * @var PaymentInfoList
	 */ 
	public PaymentInfoList $paymentInfoList;

	/**
	 * 
	 * @access public
 * @var SenderIdentifier
	 */ 
	public SenderIdentifier $sender;
	
	/**
	 * 
	 * @access public
 * @var FundingPlan
	 */ 
	public FundingPlan $defaultFundingPlan;

	/**
	 * 
	 * @access public
 * @var WarningDataList
	 */ 
	public WarningDataList $warningDataList;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData
	 */ 
	public ErrorData $error;


}
