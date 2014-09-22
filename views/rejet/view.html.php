<?php

/**
 * @version     1.0.0
 * @package     com_promo
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Kouceyla Hadji <hadjikouceyla@gmail.com> - http://www.behance.net/kossa
 */
// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

/**
 * View class for a list of Promo.
 */
class PromoViewRejet extends JViewLegacy {

    /**
     * Display the view
     */
    public function display($tpl = null) {
      
      $model = JModelLegacy::getInstance('PromoRejeter', 'PromoModel');
      $this->data = $model->getPromoRejeter();
      parent::display($tpl);
    }
}
