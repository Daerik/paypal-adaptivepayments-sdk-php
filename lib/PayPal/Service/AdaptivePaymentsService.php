<?php
namespace PayPal\Service;
use PayPal\Common\PPApiContext;
use PayPal\Core\PPMessage;
use PayPal\Core\PPBaseService;
use PayPal\Core\PPUtils;
use PayPal\Types;
use PayPal\Handler\PPPlatformServiceHandler;
use PayPal\Types\AP\CancelPreapprovalRequest;
use PayPal\Types\AP\CancelPreapprovalResponse;
use PayPal\Types\AP\ConfirmPreapprovalRequest;
use PayPal\Types\AP\ConfirmPreapprovalResponse;
use PayPal\Types\AP\ConvertCurrencyRequest;
use PayPal\Types\AP\ConvertCurrencyResponse;
use PayPal\Types\AP\ExecutePaymentRequest;
use PayPal\Types\AP\ExecutePaymentResponse;
use PayPal\Types\AP\GetAllowedFundingSourcesRequest;
use PayPal\Types\AP\GetAllowedFundingSourcesResponse;
use PayPal\Types\AP\GetAvailableShippingAddressesRequest;
use PayPal\Types\AP\GetFundingPlansRequest;
use PayPal\Types\AP\GetPaymentOptionsRequest;
use PayPal\Types\AP\GetPaymentOptionsResponse;
use PayPal\Types\AP\GetPrePaymentDisclosureRequest;
use PayPal\Types\AP\GetShippingAddressesRequest;
use PayPal\Types\AP\GetUserLimitsRequest;
use PayPal\Types\AP\PaymentDetailsRequest;
use PayPal\Types\AP\PaymentDetailsResponse;
use PayPal\Types\AP\PayRequest;
use PayPal\Types\AP\PayResponse;
use PayPal\Types\AP\PreapprovalDetailsRequest;
use PayPal\Types\AP\PreapprovalDetailsResponse;
use PayPal\Types\AP\PreapprovalRequest;
use PayPal\Types\AP\PreapprovalResponse;
use PayPal\Types\AP\RefundRequest;
use PayPal\Types\AP\RefundResponse;
use PayPal\Types\AP\SetPaymentOptionsRequest;
use PayPal\Types\AP\SetPaymentOptionsResponse;
use PayPal\Types\AP\GetFundingPlansResponse;
use PayPal\Types\AP\GetAvailableShippingAddressesResponse;
use PayPal\Types\AP\GetShippingAddressesResponse;
use PayPal\Types\AP\GetUserLimitsResponse;
use PayPal\Types\AP\GetPrePaymentDisclosureResponse;

/**
 * AUTO GENERATED code for AdaptivePayments
 */
class AdaptivePaymentsService extends PPBaseService {

	// Service Version
	private static string $SERVICE_VERSION = "1.8.5";

	// Service Name
	private static string $SERVICE_NAME = "AdaptivePayments";

    // SDK Name
	protected static string $SDK_NAME = "adaptivepayments-php-sdk";

	// SDK Version
	protected static string $SDK_VERSION = "3.9.2";

    /**
    * @param $config - Dynamic config map. This takes the higher precedence if config file is also present.
    *
    */
	public function __construct($config = null) {
		parent::__construct(self::$SERVICE_NAME, 'NV', $config);
	}


	/**
	 * Service Call: CancelPreapproval
	 *
	 * @param CancelPreapprovalRequest $cancelPreapprovalRequest
	 * @param null|mixed               $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 *
	 * @return Types\AP\CancelPreapprovalResponse
	 * @throws APIException
	 */
	public function CancelPreapproval(CancelPreapprovalRequest $cancelPreapprovalRequest, mixed $apiCredential = NULL): CancelPreapprovalResponse|Types\AP\CancelPreapprovalResponse {
		$ret = new CancelPreapprovalResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp =$this->call('AdaptivePayments', 'CancelPreapproval', $cancelPreapprovalRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: ConfirmPreapproval
	 *
	 * @param ConfirmPreapprovalRequest $confirmPreapprovalRequest
	 * @param null|mixed                $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 *
	 * @return Types\AP\ConfirmPreapprovalResponse
	 * @throws APIException
	 */
	public function ConfirmPreapproval(ConfirmPreapprovalRequest $confirmPreapprovalRequest, mixed $apiCredential = NULL): Types\AP\ConfirmPreapprovalResponse|ConfirmPreapprovalResponse {
		$ret = new ConfirmPreapprovalResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp =$this->call('AdaptivePayments', 'ConfirmPreapproval', $confirmPreapprovalRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: ConvertCurrency
	 *
	 * @param ConvertCurrencyRequest $convertCurrencyRequest
	 * @param null|mixed             $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 *
	 * @return Types\AP\ConvertCurrencyResponse
	 * @throws APIException
	 */
	public function ConvertCurrency(ConvertCurrencyRequest $convertCurrencyRequest, mixed $apiCredential = NULL): ConvertCurrencyResponse|Types\AP\ConvertCurrencyResponse {
		$ret = new ConvertCurrencyResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp =$this->call('AdaptivePayments', 'ConvertCurrency', $convertCurrencyRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: ExecutePayment
	 *
	 * @param ExecutePaymentRequest $executePaymentRequest
	 * @param null|mixed            $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 *
	 * @return Types\AP\ExecutePaymentResponse
	 * @throws APIException
	 */
	public function ExecutePayment(ExecutePaymentRequest $executePaymentRequest, mixed $apiCredential = NULL): Types\AP\ExecutePaymentResponse|ExecutePaymentResponse {
		$ret = new ExecutePaymentResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp =$this->call('AdaptivePayments', 'ExecutePayment', $executePaymentRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: GetAllowedFundingSources
	 *
	 * @param GetAllowedFundingSourcesRequest $getAllowedFundingSourcesRequest
	 * @param null|mixed                      $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 *
	 * @return Types\AP\GetAllowedFundingSourcesResponse
	 * @throws APIException
	 */
	public function GetAllowedFundingSources(GetAllowedFundingSourcesRequest $getAllowedFundingSourcesRequest, mixed $apiCredential = NULL): GetAllowedFundingSourcesResponse|Types\AP\GetAllowedFundingSourcesResponse {
		$ret = new GetAllowedFundingSourcesResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp =$this->call('AdaptivePayments', 'GetAllowedFundingSources', $getAllowedFundingSourcesRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: GetPaymentOptions
	 *
	 * @param GetPaymentOptionsRequest $getPaymentOptionsRequest
	 * @param null|mixed               $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 *
	 * @return Types\AP\GetPaymentOptionsResponse
	 * @throws APIException
	 */
	public function GetPaymentOptions(GetPaymentOptionsRequest $getPaymentOptionsRequest, mixed $apiCredential = NULL): GetPaymentOptionsResponse|Types\AP\GetPaymentOptionsResponse {
		$ret = new GetPaymentOptionsResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp =$this->call('AdaptivePayments', 'GetPaymentOptions', $getPaymentOptionsRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: PaymentDetails
	 *
	 * @param PaymentDetailsRequest $paymentDetailsRequest
	 * @param null|mixed            $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 *
	 * @return Types\AP\PaymentDetailsResponse
	 * @throws APIException
	 */
	public function PaymentDetails(PaymentDetailsRequest $paymentDetailsRequest, mixed $apiCredential = NULL): Types\AP\PaymentDetailsResponse|PaymentDetailsResponse {
		$ret = new PaymentDetailsResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp =$this->call('AdaptivePayments', 'PaymentDetails', $paymentDetailsRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: Pay
	 *
	 * @param PayRequest $payRequest
	 * @param null|mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 *
	 * @return Types\AP\PayResponse
	 * @throws APIException
	 */
	public function Pay(PayRequest $payRequest, mixed $apiCredential = NULL): PayResponse|Types\AP\PayResponse {
		$ret = new PayResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp =$this->call('AdaptivePayments', 'Pay', $payRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: PreapprovalDetails
	 *
	 * @param PreapprovalDetailsRequest $preapprovalDetailsRequest
	 * @param null|mixed                $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 *
	 * @return Types\AP\PreapprovalDetailsResponse
	 * @throws APIException
	 */
	public function PreapprovalDetails(PreapprovalDetailsRequest $preapprovalDetailsRequest, mixed $apiCredential = NULL): Types\AP\PreapprovalDetailsResponse|PreapprovalDetailsResponse {
		$ret = new PreapprovalDetailsResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp =$this->call('AdaptivePayments', 'PreapprovalDetails', $preapprovalDetailsRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: Preapproval
	 *
	 * @param PreapprovalRequest $preapprovalRequest
	 * @param null|mixed         $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 *
	 * @return Types\AP\PreapprovalResponse
	 * @throws APIException
	 */
	public function Preapproval(PreapprovalRequest $preapprovalRequest, mixed $apiCredential = NULL): PreapprovalResponse|Types\AP\PreapprovalResponse {
		$ret = new PreapprovalResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp =$this->call('AdaptivePayments', 'Preapproval', $preapprovalRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: Refund
	 *
	 * @param RefundRequest $refundRequest
	 * @param null|mixed    $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 *
	 * @return Types\AP\RefundResponse
	 * @throws APIException
	 */
	public function Refund(RefundRequest $refundRequest, mixed $apiCredential = NULL): Types\AP\RefundResponse|RefundResponse {
		$ret = new RefundResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp =$this->call('AdaptivePayments', 'Refund', $refundRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: SetPaymentOptions
	 *
	 * @param SetPaymentOptionsRequest $setPaymentOptionsRequest
	 * @param null|mixed               $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 *
	 * @return Types\AP\SetPaymentOptionsResponse
	 * @throws APIException
	 */
	public function SetPaymentOptions(SetPaymentOptionsRequest $setPaymentOptionsRequest, mixed $apiCredential = NULL): Types\AP\SetPaymentOptionsResponse|SetPaymentOptionsResponse {
		$ret = new SetPaymentOptionsResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp =$this->call('AdaptivePayments', 'SetPaymentOptions', $setPaymentOptionsRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: GetFundingPlans
	 *
	 * @param GetFundingPlansRequest $getFundingPlansRequest
	 * @param null|mixed             $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 *
	 * @return Types\AP\GetFundingPlansResponse
	 * @throws APIException
	 */
	public function GetFundingPlans(GetFundingPlansRequest $getFundingPlansRequest, mixed $apiCredential = NULL): GetFundingPlansResponse|Types\AP\GetFundingPlansResponse {
		$ret = new GetFundingPlansResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp =$this->call('AdaptivePayments', 'GetFundingPlans', $getFundingPlansRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: GetAvailableShippingAddresses
	 *
	 * @param GetAvailableShippingAddressesRequest $getAvailableShippingAddressesRequest
	 * @param null|mixed                           $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 *
	 * @return Types\AP\GetAvailableShippingAddressesResponse
	 * @throws APIException
	 */
	public function GetAvailableShippingAddresses(GetAvailableShippingAddressesRequest $getAvailableShippingAddressesRequest, mixed $apiCredential = NULL): GetAvailableShippingAddressesResponse|Types\AP\GetAvailableShippingAddressesResponse {
		$ret = new GetAvailableShippingAddressesResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp =$this->call('AdaptivePayments', 'GetAvailableShippingAddresses', $getAvailableShippingAddressesRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: GetShippingAddresses
	 *
	 * @param GetShippingAddressesRequest $getShippingAddressesRequest
	 * @param null|mixed                  $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 *
	 * @return Types\AP\GetShippingAddressesResponse
	 * @throws APIException
	 */
	public function GetShippingAddresses(GetShippingAddressesRequest $getShippingAddressesRequest, mixed $apiCredential = NULL): Types\AP\GetShippingAddressesResponse|GetShippingAddressesResponse {
		$ret = new GetShippingAddressesResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp =$this->call('AdaptivePayments', 'GetShippingAddresses', $getShippingAddressesRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: GetUserLimits
	 *
	 * @param GetUserLimitsRequest $getUserLimitsRequest
	 * @param null|mixed           $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 *
	 * @return Types\AP\GetUserLimitsResponse
	 * @throws APIException
	 */
	public function GetUserLimits(GetUserLimitsRequest $getUserLimitsRequest, mixed $apiCredential = NULL): Types\AP\GetUserLimitsResponse|GetUserLimitsResponse {
		$ret = new GetUserLimitsResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp =$this->call('AdaptivePayments', 'GetUserLimits', $getUserLimitsRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


	/**
	 * Service Call: GetPrePaymentDisclosure
	 *
	 * @param GetPrePaymentDisclosureRequest $getPrePaymentDisclosureRequest
	 * @param null|mixed                     $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically
	 *
	 * @return Types\AP\GetPrePaymentDisclosureResponse
	 * @throws APIException
	 */
	public function GetPrePaymentDisclosure(GetPrePaymentDisclosureRequest $getPrePaymentDisclosureRequest, mixed $apiCredential = NULL): GetPrePaymentDisclosureResponse|Types\AP\GetPrePaymentDisclosureResponse {
		$ret = new GetPrePaymentDisclosureResponse();
		$apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPPlatformServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
		$resp =$this->call('AdaptivePayments', 'GetPrePaymentDisclosure', $getPrePaymentDisclosureRequest, $apiContext, $handlers);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}

}
