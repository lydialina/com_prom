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
class PromoViewRegisters extends JViewLegacy {

    /**
     * Display the view
     */
    public function display($tpl = null) {
      
      // S'il est connecter recuperer les info du promoteur
      $id = JFactory::getUser()->id;
      $this->promoteur = '';
      if ($id>0) { // Logged Already
        // Get her information
        $model = JModelLegacy::getInstance('PromoUser', 'PromoModel');
        $this->promoteur = $model->getPromo($id);
      }

      parent::display($tpl);
    }
}
