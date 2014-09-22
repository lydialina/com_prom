<?php
/**
 * @version     1.0.0
 * @package     com_promo
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Kouceyla Hadji <hadjikouceyla@gmail.com> - http://www.behance.net/kossa
 */

// No direct access.
defined('_JEXEC') or die;

require_once JPATH_COMPONENT.'/controller.php';

/**
 * Registers list controller class.
 */
class PromoControllerPublic extends PromoController
{
	/**
	 * Proxy for getModel.
	 * @since	1.6
	 */
	public function register()
	{
   
		  // Extraction of Variable
      $app            = JFactory::getApplication();
      $jinput         = $app->input;
      $raison_sociale = $jinput->get('raison_sociale', '', 'STRING');
      $username       = $jinput->get('username', '', 'USERNAME');
      $codepromo      = $jinput->get('codepromo', '', 'INT');
      $num_rc         = $jinput->get('num_rc', '', 'STRING');
      $password       = $jinput->get('password1', '', 'STRING');
      $password2      = $jinput->get('password2', '', 'STRING');
      $email1         = $jinput->get('email1', '', 'STRING');
      $email2         = $jinput->get('email2', '', 'STRING');

      $ID = JFactory::getUser()->id; // Get the ID of the current logged user

      // Checking RC + Code promoteur + Same email + same Password


      // Creation of user Object
      require_once JPATH_COMPONENT.'/helpers/' .'promo.php';
      $userID = PromoFrontendHelper::register_user($username, $raison_sociale, $password, $password2, $email1);

      // Insert in the promo table
      $obj = new stdClass();
      $obj->code_promo = $codepromo;

      // Check if 
      if (is_numeric($userID) && $userID != 0) {
        $obj->id_user = $userID;
        $this->getModel('PromoUser')->setPromo($obj);
      }else{
        // Insertion dans la table rejeter
        $obj->raison_sociale = $raison_sociale;
        $obj->username       = $username;
        $obj->num_rc         = $num_rc;
        $obj->password1      = $password;
        $obj->password2      = $password2;
        $obj->email1         = $email1;
        $obj->email2         = $email2;
        $obj->date           = date('Y-m-d H:i:s');
        $obj->ip             = (!empty($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : '';
        $obj->error          = 'error';
        
        $this->getModel('PromoRejeter')->setPromoRejeter($obj);
        
        //$app->redirect('index.php?option=com_promo&view=registers', $userID, 'error');
      }

      // Auto login
      PromoFrontendHelper::autologin($username, $password);

      // Redirection to the Dash
  }

}