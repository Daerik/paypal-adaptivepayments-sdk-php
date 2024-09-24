<?php 
namespace PayPal\Types\AP;
use DateTime;
use PayPal\Core\PPMessage;
/**
 * The details of the Preapproval as specified in the
 * Preapproval operation. 
 */
class PreapprovalDetailsResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\ResponseEnvelope	 
	 */ 
	public PayPal\Types\Common\ResponseEnvelope $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var bool
	 */ 
	public bool $approved;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $cancelUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var int
	 */ 
	public int $curPayments;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double	 
	 */ 
	public float $curPaymentsAmount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var int
	 */ 
	public int $curPeriodAttempts;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public dateTime $curPeriodEndingDate;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $currencyCode;

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
	public string $pinType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $returnUrl;

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
	public string $memo;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public dateTime $startingDate;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $status;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $ipnNotificationUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\AP\AddressList	 
	 */ 
	public PayPal\Types\AP\AddressList $addressList;

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
	 
	 	 	 	 
	 * @var PayPal\Types\AP\SenderIdentifier	 
	 */ 
	public PayPal\Types\AP\SenderIdentifier $sender;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public string $agreementType;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\ErrorData	 
	 */ 
	public PayPal\Types\Common\ErrorData $error;


}
