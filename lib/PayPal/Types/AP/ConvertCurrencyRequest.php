<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
use PayPal\Types\Common\RequestEnvelope;
/**
 * A request to convert one or more currencies into their
 * estimated values in other currencies. 
 */
class ConvertCurrencyRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope
	 */ 
	public RequestEnvelope $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyList
	 */ 
	public mixed $baseAmountList;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyCodeList
	 */ 
	public mixed $convertToCurrencyList;

	/**
	 * The two-character ISO country code where fx suppposed to
	 * happen 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $countryCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public string $conversionType;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $baseAmountList = NULL, $convertToCurrencyList = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->baseAmountList = $baseAmountList;
		$this->convertToCurrencyList = $convertToCurrencyList;
	}


}
