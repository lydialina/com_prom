<?php

/**
 * @version     1.0.0
 * @package     com_promo
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Kouceyla Hadji <hadjikouceyla@gmail.com> - http://www.behance.net/kossa
 */
defined('_JEXEC') or die;

class PromoFrontendHelper {

/*
|------------------------------------------------------------------------------------
| Creation of the users
|------------------------------------------------------------------------------------
*/
  public static function register_user($username, $first_name, $password, $password2, $email,$groups=array("2")){ 
      
    jimport('joomla.user.helper');
    
    $data = array(
      "name"=>$first_name,
      "username"=>$username,
      "password"=>$password,
      "password2"=>$password2,
      "email"=>$email,
      "block"=>0,
      "groups"=>$groups,
    );

    $user = new JUser;

    if(!$user->bind($data)) {
      return $user->getError();
    }
    if (!$user->save()) {
      return $user->getError();
    }

    return $user->id;
   }

/*
|------------------------------------------------------------------------------------
| Auto login after register
|------------------------------------------------------------------------------------
*/
  public static function autologin($username, $password){
    $credentials = array();
    $credentials['username'] = $username;
    $credentials['password'] = $password;
    $options = array();
    
    $app = JFactory::getApplication();
    $rslt = $app->login( $credentials, $options );
  }      

  
}
