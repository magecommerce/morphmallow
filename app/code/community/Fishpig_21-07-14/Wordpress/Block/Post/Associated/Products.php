<?php
/**
 * @category    Fishpig
 * @package     Fishpig_Wordpress
 * @license     http://fishpig.co.uk/license.txt
 * @author      Ben Tideswell <help@fishpig.co.uk>
 */

class Fishpig_Wordpress_Block_Post_Associated_Products extends Mage_Catalog_Block_Product_Abstract
{
	/**
	 * Retrieve a collection of products
	 *
	 * @return array|Mage_Catalog_Model_Mysql4_Resource_Eav_Mysql4_Product_Collection
	 */
	public function getProducts($attributes = null)
	{
		$collection = Mage::helper('wordpress/catalog_product')
			->getAssociatedProducts($this->getPost());
		
		if ($collection) {
			if (is_null($attributes)) {
				$attributes = Mage::getSingleton('catalog/config')->getProductAttributes();
			}
			
			return $collection->addAttributeToSelect($attributes);
		}
		
		return array();
	}
	
	/**
	 * Retrieve the post object
	 *
	 * @return false|Fishpig_Wordpress_Model_Post
	 */
	public function getPost()
	{
		return Mage::registry('wordpress_post');
	}
}
