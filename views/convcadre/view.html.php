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
class PromoViewConvcadre extends JViewLegacy {

    /**
     * Display the view
     */
    public function display($tpl = null) {
      
      $ID = JFactory::getUser()->id;// get the user_id
      if (!$ID) {
        JFactory::getApplication()->redirect('index.php?option=com_promo&view=registers&Itemid=160', 'Merci de se connecter', 'warning');
      }
      $model = JModelLegacy::getInstance('Promoteur', 'PromoModel');
      $code_opgi = $model->getCodeOPGI($ID)->CODE_OPGI;
      
      // get the code + wilaya
      //$this->data = $model->getMarche($codepromo, $wilaya);
      $this->data = $model->getConvcadre($code_opgi);

      // Check if XLS
      $jinput = JFactory::getApplication()->input;
      $form = $jinput->get('form',NULL, 'STRING');
      parent::display($form);
    }
}
