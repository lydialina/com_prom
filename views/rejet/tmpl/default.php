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

$promoteurs = $this->data;

?>
<h1>Liste des compte rejetés</h1>


<table class="table table-bordered">
  <thead>
    <tr>
      <th>Raison Sociale</th>
      <th>Username</th>
      <th>Code Promoteur</th>
      <th>Code Num de RC</th>
      <th>Password 1</th>
      <th>Password 2</th>
      <th>Email 1</th>
      <th>Email 2</th>
      <th>Date</th>
      <th>ip</th>
      <th>Erreur</th>
    </tr>
  </thead>
  

  <?php foreach ($promoteurs as $key => $promoteur): ?>
    <tr>
      <td><?php echo $promoteur->raison_sociale ?></td>
      <td><?php echo $promoteur->username ?></td>
      <td><?php echo $promoteur->code_promo ?></td>
      <td><?php echo $promoteur->num_rc ?></td>
      <td><?php echo $promoteur->password1 ?></td>
      <td><?php echo $promoteur->password2 ?></td>
      <td><?php echo $promoteur->email1 ?></td>
      <td><?php echo $promoteur->email2 ?></td>
      <td><?php echo $promoteur->date ?></td>
      <td><?php echo $promoteur->ip ?></td>
      <td><?php echo $promoteur->error ?></td>
    </tr>
  <?php endforeach ?>


</table>
