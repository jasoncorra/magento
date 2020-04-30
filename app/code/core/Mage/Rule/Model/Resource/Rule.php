<?php
/**
 * Magento Enterprise Edition
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magento Enterprise Edition End User License Agreement
 * that is bundled with this package in the file LICENSE_EE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.magento.com/license/enterprise-edition
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Mage
 * @package     Mage_Rule
 * @copyright Copyright (c) 2006-2020 Magento, Inc. (http://www.magento.com)
 * @license http://www.magento.com/license/enterprise-edition
 */


/**
 * Abstract Rule entity resource model
 *
 * @deprecated since 1.7.0.0 use Mage_Rule_Model_Resource_Abstract instead
 *
 * @category Mage
 * @package Mage_Rule
 * @author Magento Core Team <core@magentocommerce.com>
 */
class Mage_Rule_Model_Resource_Rule extends Mage_Rule_Model_Resource_Abstract
{
    /**
     * Initialize main table and table id field
     */
    protected function _construct()
    {
        $this->_init('rule/rule', 'rule_id');
    }
}
