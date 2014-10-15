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

$convcadres = $this->data;
//var_dump($convcadres);

?>
<h1 class="title">Liste des situations des convcadres</h1>

<a href="index.php?option=com_promo&view=convcadre&form=xls" class="btn btn-success">Export XLS</a>

<table class="table table-bordered mt30">
  <thead>
    <tr>
      <th>#</th>
      <th>CODE_PROD</th>
      <th>CODE_OPGI</th>
      <th>NUM_TR</th>
      <th>ANNEE</th>
      <th>LIB_CONV</th>
      <th>NB_LOG</th>
    </tr>
  </thead>

  <?php foreach ($convcadres as $key => $convcadre): ?>
    <tr>
      <td><?php echo $key+1 ?></td>
      <td><?php echo $convcadre->CODE_PROD ?></td>
      <td><?php echo $convcadre->CODE_OPGI ?></td>
      <td><?php echo $convcadre->NUM_TR ?></td>
      <td><?php echo $convcadre->ANNEE ?></td>
      <td><?php echo $convcadre->LIB_CONV ?></td>
      <td><?php echo $convcadre->NB_LOG ?></td>
    </tr>
  <?php endforeach ?>


</table>
