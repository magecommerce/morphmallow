<?php
/**
 * Mageix_StoreLocator extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   Mageix
 * @package    Mageix_ExtensionManager
 * @copyright  Copyright (c) 2011 Mageix LLC
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * @category   Mageix
 * @package    Mageix_ExtensionManager
 * @author     Boris (Moshe) Gurvich <support@Mageix.com>
 */
class Mageix_ExtensionManager_Block_Adminhtml_Module extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /*
    public function __construct()
    {
        $this->_blockGroup = 'mextensionmanager';
        $this->_controller = 'adminhtml_module';
        $this->_headerText = Mage::helper('mextensionmanager')->__('Mageix Upgrades');

        $this->_addButton('check_updates', array(
            'label'     => $this->__('Check for version updates'),
            'onclick'   => "location.href = '{$this->getUrl('mextensionmanageradmin/adminhtml_module/checkUpdates')}'",
            'class'     => 'save',
        ), 0);

        parent::__construct();

        $this->_removeButton('add');
        $this->setTemplate('mextensionmanager/container.phtml');
    }
    */

    public function __construct()
    {
        parent::__construct();

        $this->_headerText = Mage::helper('mextensionmanager')->__('Mageix Extension Manager');

        $this->_objectId = 'id';
        $this->_blockGroup = 'mextensionmanager';
        $this->_controller = 'adminhtml_module';

        $this->_addButton('check_updates', array(
            'label'     => $this->__('Check for version updates'),
            'onclick'   => "location.href = '{$this->getUrl('mextensionmanageradmin/adminhtml_module/checkUpdates')}'",
            'class'     => 'save',
        ), 0);

        $this->_removeButton('save');
        $this->_removeButton('delete');
        $this->_removeButton('reset');
        $this->_removeButton('back');

    }

}