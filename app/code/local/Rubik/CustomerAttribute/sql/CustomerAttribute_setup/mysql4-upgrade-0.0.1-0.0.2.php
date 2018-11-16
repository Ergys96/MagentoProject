<?php

$installer = $this;
$installer->startSetup();
$entity = $installer->getEntityTypeId('customer');

if(!$installer->attributeExists($entity, 'customer_company')) {
    $installer->removeAttribute($entity, 'customer_company');
}

$installer->addAttribute($entity, 'customer_company', array(
        'type' => 'text',
        'label' => 'Customer Company',
        'input' => 'text',
        'visible' => true,
        'required' => true,
        'default_value' => '',
        'visible_on_front' => '1',
        'user_defined' => '0',
        'adminhtml_only' => '0'
));

$forms = array(
    'adminhtml_customer',
    'customer_account_create',
    'customer_account_edit'
);
$attribute = Mage::getSingleton('eav/config')->getAttribute($installer->getEntityTypeId('customer'), 'customer_company');
$attribute->setData('used_in_forms', $forms);
$attribute->save();

$installer->endSetup();

?>