<?php
	namespace PayPal\Types\AP;
	
	use PayPal\Core\PPMessage;
	/**
	 *
	 */
	class FundingConstraint
		extends PPMessage {
		
		/**
		 *
		 * @access public
		 * @var FundingTypeList
		 */
		public FundingTypeList $allowedFundingType;
		
	}
