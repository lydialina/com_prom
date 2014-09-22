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

$promoteur = $this->promoteur;
//var_dump($promoteur); // Tableau
$url = ($promoteur == '') ? 'index.php?option=com_promo&task=public.register' : 'index.php?option=com_promo&task=public.updatepromo';
?>

<section class="register-promo">
  
  <form action="<?php echo $url ?>" method="post">
    <fieldset>
      <legend>Espace promoteur / Inscription</legend>
      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="raison_sociale">Raison sociale :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="text" name="raison_sociale" id="raison_sociale" value="<?php echo ($promoteur != '') ? $promoteur->name : '';?>" required>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="username">Identifiant :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="text" name="username" id="username" value="<?php echo ($promoteur != '') ? $promoteur->username : '' ?>" required>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="codepromo">Code promoteur :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="text" name="codepromo" id="codepromo" value="<?php echo ($promoteur != '') ? $promoteur->code_promo : '' ?>" required <?php echo ($promoteur != '') ? 'readonly': ''?>>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="num_rc">N° Registre de Commerce :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="text" name="num_rc" id="num_rc" value="" required>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="password1">Mot de passe :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="password" name="password1" id="password1" required>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="password2">Confirmation :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="password" name="password2" id="password2" required>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="email1">Adresse e-mail :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="email" name="email1" id="email1" value="<?php echo ($promoteur != '') ? $promoteur->email : '' ?>" required>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3 control-label">
          <label for="email2">Confirmez l'adresse e-mail :  <span class="red">*</span></label>
        </div>
        <div class="col-sm-9">
          <input type="email" name="email2" id="email2" value="<?php echo ($promoteur != '') ? $promoteur->email : '' ?>" required>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-9 col-sm-offset-3">
          <input type="submit" name="" value="<?php echo ($promoteur == '')?'Créer le compte':'Modifier compte'  ?>" class="btn btn-success">
        </div>
      </div>

    </fieldset>
  </form>
</section>