<?php 
namespace PayPal\Types\AP;
use DateTime;
use PayPal\Core\PPMessage;
/**
 * A request to create a Preapproval. A Preapproval is an
 * agreement between a Paypal account holder (the sender) and
 * the API caller (the service invoker) to make payment(s) on
 * the the sender's behalf with various limitations defined. 
 */
class PreapprovalRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\Common\RequestEnvelope	 
	 */ 
	public mixed $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\Common\ClientDetailsType	 
	 */ 
	public \PayPal\Types\Common\ClientDetailsType $clientDetails;

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
	 
	 	 	 	 
	 * @var int
	 */ 
	public int $dateOfMonth;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public string $dayOfWeek;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public dateTime $endingDate;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double	 
	 */ 
	public float $maxAmountPerPayment;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var int
	 */ 
	public int $maxNumberOfPayments;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var int
	 */ 
	public int $maxNumberOfPaymentsPerPeriod;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double	 
	 */ 
	public float $maxTotalAmountOfAllPayments;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $paymentPeriod;

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
	public string $memo;

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
	public string $senderEmail;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public mixed $startingDate;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $pinType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $feesPayer;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var bool
	 */ 
	public bool $displayMaxTotalAmount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var bool
	 */ 
	public bool $requireInstantFundingSource;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\SenderIdentifier	 
	 */ 
	public \PayPal\Types\AP\SenderIdentifier $sender;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $cancelUrl = NULL, $currencyCode = NULL, $returnUrl = NULL, $startingDate = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->cancelUrl = $cancelUrl;
		$this->currencyCode = $currencyCode;
		$this->returnUrl = $returnUrl;
		$this->startingDate = $startingDate;
	}


}
