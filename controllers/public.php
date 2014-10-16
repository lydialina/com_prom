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
      
      // Personnel
      $nom            = $jinput->get('nom', '', 'STRING');
      $prenom         = $jinput->get('prenom', '', 'STRING');
      $fonction       = $jinput->get('fonction', '', 'STRING');
      $username       = $jinput->get('username', '', 'USERNAME');
      $password       = $jinput->get('password1', '', 'STRING');
      $password2      = $jinput->get('password2', '', 'STRING');
      $email1         = $jinput->get('email1', '', 'STRING');
      $email2         = $jinput->get('email2', '', 'STRING');
      
      // Espace promoteur
      $codepromo      = $jinput->get('codepromo', '', 'STRING');
      $raison_sociale = $jinput->get('raison_sociale', '', 'STRING');
      $adresse        = $jinput->get('adresse', '', 'STRING');
      $wilaya         = $jinput->get('wilaya', '', 'STRING');
      $num_rc         = $jinput->get('num_rc', '', 'STRING');
      $rib            = $jinput->get('rib', '', 'STRING');


      // Checking RC + Code promoteur + Same email + same Password

      // code promo , mail, pass
      $error = '';
      // if (!$this->getModel('Promoteur')->verif_prom_cod($codepromo)) {
      //   $error .= 'Votre code n\'existe pas !';
      // }

      if ( $email1!=$email2 ) {
        $error .= 'Votre adresse mail de confirmation ne correspond pas !';
      }

      if ( $password!=$password2 ) {
        $error .= 'Votre mot de passe de confirmation ne correspond pas !';
      }
      // RC

      /*if (!$this->getModel('Promoteur')->verif_RC($num_rc) ) {
        $error .='Votre Numéro de Registre est incorrect !';
      }*/

      $modelPromo = $this->getModel('Promoteur');

      $array_checking = array();
      if ($codepromo != '' && $wilaya!='') {
        $where = 'code_opgi = ' . $codepromo;
        $result = $modelPromo->verif_prom_info($where);

        if (!is_null($result)) {
          $CODE_OPGI = $result->code_opgi;
        }else{
          $error .= 'Le code promoteur n\'existe pas dans notre base, veuillez contacter votre agence pour récuperer votre code' ;
        }

      }else{
        $error .= 'Merci d\'insérer le code promoteur + la wilaya';
      }

      if ($error != '') {
        $app->redirect('index.php?option=com_promo&view=registers', $error, 'error'); // redirection
      }

      // Creation of user Object
      require_once JPATH_COMPONENT.'/helpers/' .'promo.php';
      $userID = PromoFrontendHelper::register_user($username, $raison_sociale, $password, $password2, $email1);

      // Insert in the promo table
      $obj = new stdClass();
      $obj->CODE_OPGI = $CODE_OPGI;

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
        
        $app->redirect('index.php?option=com_promo&view=registers&Itemid=160', $userID, 'error');
      }

      // Auto login
      PromoFrontendHelper::autologin($username, $password);

      // Redirection to the Dash
      $app->redirect('index.php?option=com_users&view=profile&layout=edit&Itemid=218', 'Bienvenue sur l\'espace promoteur', 'success');
  }

}
