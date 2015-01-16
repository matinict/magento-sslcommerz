<?php
/*
Sslcommerz Payment Controller
By: Abdul Matin
www.matinict.wordpress.com
*/
class Mediasoftbd_Sslcommerz_Model_Standard extends Mage_Payment_Model_Method_Abstract {
	protected $_code = 'Sslcommerz';
	
	protected $_isInitializeNeeded      = true;
	protected $_canUseInternal          = true;
	protected $_canUseForMultishipping  = false;
	
	public function getOrderPlaceRedirectUrl() {
		return Mage::getUrl('Sslcommerz/payment/redirect', array('_secure' => true));
	}
}
?>