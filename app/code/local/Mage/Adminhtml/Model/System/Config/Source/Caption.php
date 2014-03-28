<?php
/**
 * Contus Support Interactive.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file PRICE COUNTDOWN-LICENSE.txt.
 *
 * =================================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * =================================================================
 * This package designed for Magento 1.4.x, 1.5.x, 1.6.x and 1.7.x COMMUNITY edition
 * Contus Support does not guarantee correct work of this package
 * on any other Magento edition except Magento 1.4.x, 1.5.x, 1.6.x and 1.7.x COMMUNITY edition.
 * =================================================================
 */
class Mage_Adminhtml_Model_System_Config_Source_caption
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => showall, 'label'=>Mage::helper('adminhtml')->__('Show in catalog/products pages')),
            array('value' => listpage, 'label'=>Mage::helper('adminhtml')->__('Show in catalog page')),
            array('value' => viewpage, 'label'=>Mage::helper('adminhtml')->__('Show in product page')),
            array('value' => hideall, 'label'=>Mage::helper('adminhtml')->__('Hide in all pages')),
           
        );
    }

}
