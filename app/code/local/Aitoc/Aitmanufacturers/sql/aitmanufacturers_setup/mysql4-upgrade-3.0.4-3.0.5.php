<?php
/**
 * Shop By Brands
 *
 * @category:    Aitoc
 * @package:     Aitoc_Aitmanufacturers
 * @version      3.3.1
 * @license:     sQl9Zt8K5bexz8avttVeuLMWc01LOvMh5Mmse4lAn8
 * @copyright:   Copyright (c) 2014 AITOC, Inc. (http://www.aitoc.com)
 */
/**
 * @copyright  Copyright (c) 2010 AITOC, Inc. 
 * 
 */

$installer = $this;
/* @var $installer Mage_Catalog_Model_Resource_Eav_Mysql4_Setup */
$installer->startSetup();
$connection = $installer->getConnection();
$connection->addColumn($this->getTable('aitmanufacturers_config'), 'page_title', 'VARCHAR(255) NOT NULL DEFAULT ""');
$connection->addColumn($this->getTable('aitmanufacturers_config'), 'meta_keywords', 'TEXT NOT NULL');
$connection->addColumn($this->getTable('aitmanufacturers_config'), 'meta_description', 'TEXT NOT NULL');

$installer->endSetup();