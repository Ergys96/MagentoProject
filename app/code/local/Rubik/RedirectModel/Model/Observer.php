<?php 
    class Rubik_RedirectModel_Model_Observer {
        
        public function redirect(Varien_Event_Observer $observer){

            $session = Mage::getSingleton('customer/session');
            $session->setAfterAuthUrl(Mage::getBaseUrl()); //redirects to homepage
        }
}
?>


