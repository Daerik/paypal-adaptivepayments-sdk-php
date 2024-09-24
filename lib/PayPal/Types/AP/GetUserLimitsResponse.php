<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	use PayPal\Types\Common\ErrorData;
	use PayPal\Types\Common\ResponseEnvelope;
	/**
	 * A response that contains a list of remaining limits
	 */
	class GetUserLimitsResponse
		extends PPMessage {
		
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
		 * @var UserLimit
		 */
		public UserLimit $userLimit;
		
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
