<?php
 
//  MyCompany_MyModule_FileName
class Rubik_HelloWorld_WorldController extends Mage_Core_Controller_Front_Action
{
    
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

}
?>