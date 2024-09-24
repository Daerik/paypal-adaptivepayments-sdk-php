<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;  
/**
 * 
 */
class ReceiverInfoList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ReceiverInfo
	 */ 
	public mixed $receiverInfo;

	/**
	 * Constructor with arguments
	 */
	public function __construct($receiverInfo = NULL) {
		$this->receiverInfo = $receiverInfo;
	}


}
