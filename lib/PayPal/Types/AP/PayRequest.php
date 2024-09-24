<?php 
namespace PayPal\Types\AP;
use Cassandra\Duration;
use PayPal\Core\PPMessage;
/**
 * The PayRequest contains the payment instructions to make
 * from sender to receivers. 
 */
class PayRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\RequestEnvelope	 
	 */ 
	public mixed $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\ClientDetailsType	 
	 */ 
	public PayPal\Types\Common\ClientDetailsType $clientDetails;

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
	 
	 	 	 	 
	 * @var PayPal\Types\AP\ReceiverList	 
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
	 
	 	 	 	 
	 * @var PayPal\Types\AP\FundingConstraint	 
	 */ 
	public PayPal\Types\AP\FundingConstraint $fundingConstraint;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\AP\SenderIdentifier	 
	 */ 
	public PayPal\Types\AP\SenderIdentifier $sender;

	/**
	 * The pay key expires after the duration specified in this
	 * column. If not provided, it defaults to normal expiration
	 * behavior. Valid values are 5 minutes to 30 days. 
	 * @access public
	 
	 	 	 	 
	 * @var duration	 
	 */ 
	public duration $payKeyDuration;

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
