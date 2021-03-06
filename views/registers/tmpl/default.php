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

//var_dump($promoteur); // Tableau
require_once JPATH_COMPONENT.'/helpers/' .'promo.php';

?>

<section class="register-promo">
  
  <form action="index.php?option=com_promo&task=public.register" method="post">
    <fieldset>
      <legend>Information Peronnel</legend>
      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="nom">Nom :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="text" name="nom" id="nom" value="" >
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="prenom">Prenom :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="text" name="prenom" id="prenom" value="" >
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="fonction">Fonction :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="text" name="fonction" id="fonction" value="" >
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="username">Identifiant :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="text" name="username" id="username" value="" >
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="password1">Mot de passe :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="password" name="password1" id="password1" >
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="password2">Confirmation :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="password" name="password2" id="password2" >
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="email1">Adresse e-mail :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="email" name="email1" id="email1" value="" >
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="email2">Confirmez l'adresse e-mail :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="email" name="email2" id="email2" value="" >
        </div>
      </div>
      <br>

      <legend>Espace promoteur</legend>

      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="codepromo">Code promoteur :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="text" name="codepromo" id="codepromo" value="" >
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="raison_sociale">Raison sociale :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="text" name="raison_sociale" id="raison_sociale" value="">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="adresse">Adresse :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="text" name="adresse" id="adresse" value="">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="wilaya">Wilaya :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <?php echo PromoFrontendHelper::getWilaya() ?>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="num_rc">N° Registre de Commerce :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="text" name="num_rc" id="num_rc" value="">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="rib">Compte bancaire (RIB) :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="text" name="rib" id="rib" value="">
        </div>
      </div>

      <div class="row">
        <div class="col-sm-9 col-sm-offset-3">
          <input type="submit" name="" value="Créer le compte" class="btn btn-success">
        </div>
      </div>

    </fieldset>
  </form>
</section>