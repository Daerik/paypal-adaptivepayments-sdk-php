<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
use PayPal\Types\Common\ErrorData;
use PayPal\Types\Common\ResponseEnvelope;
/**
 * GetPrePaymentDisclosureResponse contains the information
 * related to PrePayment disclosure. status : indicates the
 * status of response. If Status = RTR then it means that this
 * is RTR transaction. If Status = NON_RTR then it means that
 * this is non RTR transaction. If Status =
 * MISSING_RECEIVER_COUNTRY_INFORMATION then it means the
 * Receiver country information is not found in PayPal
 * database. So merchant has to call the API again with same
 * set of parameter along with Receiver country code.This is
 * useful in case of Unilateral scenario. where receiver is not
 * holding paypal account. feePayer:Indicates who has agreed to
 * Pay a Fee for the RTR transaction. Merchant can use this
 * information to decide who actually has to pay the fee .
 * senderDisclosure : This Variable Holds the disclosure
 * related to sender. receiverDisclosureList : This list
 * contains the disclosure information related to receivers.
 * Merchant can just parse the details what ever is avaliable
 * in the response and display the same to user. 
 */
class GetPrePaymentDisclosureResponse  
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
	public string $status;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $feesPayer;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\SenderDisclosure	 
	 */ 
	public \PayPal\Types\AP\SenderDisclosure $senderDisclosure;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var \PayPal\Types\AP\ReceiverDisclosureList	 
	 */ 
	public \PayPal\Types\AP\ReceiverDisclosureList $receiverDisclosureList;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $disclaimer;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData
	 */ 
	public ErrorData $error;


}
