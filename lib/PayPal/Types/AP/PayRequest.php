<?php 
namespace PayPal\Types\AP;
use Cassandra\Duration;
use PayPal\Core\PPMessage;
use PayPal\Types\Common\ClientDetailsType;
use PayPal\Types\Common\RequestEnvelope;
/**
 * The PayRequest contains the payment instructions to make
 * from sender to receivers. 
 */
class PayRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope
	 */ 
	public mixed $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ClientDetailsType
	 */ 
	public ClientDetailsType $clientDetails;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public mixed $actionType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public mixed $cancelUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public mixed $currencyCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $feesPayer;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $ipnNotificationUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $memo;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $pin;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $preapprovalKey;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ReceiverList
	 */ 
	public mixed $receiverList;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var bool
	 */ 
	public bool $reverseAllParallelPaymentsOnError;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $senderEmail;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public mixed $returnUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $trackingId;

	/**
	 * 
	 * @access public
 * @var FundingConstraint
	 */ 
	public FundingConstraint $fundingConstraint;

	/**
	 * 
	 * @access public
 * @var SenderIdentifier
	 */ 
	public SenderIdentifier $sender;
	
	/**
	 * The pay key expires after the duration specified in this
	 * column. If not provided, it defaults to normal expiration
	 * behavior. Valid values are 5 minutes to 30 days. 
	 * @access public
	 
	 	 	 	 
	 * @var duration	 
	 */ 
	public Duration $payKeyDuration;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $actionType = NULL, $cancelUrl = NULL, $currencyCode = NULL, $receiverList = NULL, $returnUrl = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->actionType = $actionType;
		$this->cancelUrl = $cancelUrl;
		$this->currencyCode = $currencyCode;
		$this->receiverList = $receiverList;
		$this->returnUrl = $returnUrl;
	}


}
