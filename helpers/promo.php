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


/*
|------------------------------------------------------------------------------------
| Auto login after register
|------------------------------------------------------------------------------------
*/
  public static function getWilaya(){
    ?>
    <select name="wilaya" id="wilaya" onchange="" class="select-region">
      <option value="">Choisissez ...</option>
      <option value="01">Adrar</option>
      <option value="02">Chlef</option>
      <option value="03">Laghouat</option>
      <option value="04">Oum-El-Bouaghi</option>
      <option value="05">Batna</option>
      <option value="06">Bejaia</option>
      <option value="07">Biskra</option>
      <option value="08">Bechar</option>
      <option value="09">Blida</option>
      <option value="10">Bouira</option>
      <option value="11">Tamanrasset</option>
      <option value="12">Tebessa</option>
      <option value="13">Tlemcen</option>
      <option value="14">Tiaret</option>
      <option value="15">Tizi-Ouzou</option>
      <option value="16">Alger</option>
      <option value="17">Djelfa</option>
      <option value="18">Jijel</option>
      <option value="19">Setif</option>
      <option value="20">Saida</option>
      <option value="21">Skikda</option>
      <option value="22">Sidi-Bel-Abbes</option>
      <option value="23">Annaba</option>
      <option value="24">Guelma</option>
      <option value="25">Constantine</option>
      <option value="26">Medea</option>
      <option value="27">Mostaganem</option>
      <option value="28">MSila</option>
      <option value="29">Mascara</option>
      <option value="30">Ouargla</option>
      <option value="31">Oran</option>
      <option value="32">El-Bayadh</option>
      <option value="33">Illizi</option>
      <option value="34">Bordj-Bou-Arreridj</option>
      <option value="35">Boumerdes</option>
      <option value="36">El-Taref</option>
      <option value="37">Tindouf</option>
      <option value="38">Tissemsilt</option>
      <option value="39">El-Oued</option>
      <option value="40">Khenchela</option>
      <option value="41">Souk-Ahras</option>
      <option value="42">Tipaza</option>
      <option value="43">Mila</option>
      <option value="44">Ain-Defla</option>
      <option value="45">Naama</option>
      <option value="46">Ain-Temouchent</option>
      <option value="47">Ghardaia</option>
      <option value="48">Relizane</option></select>
    <?php
  }      

  
}
