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

$convprojets = $this->data;
//var_dump($convprojets);
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . 'components/com_promo/assets/css/jquery.dataTables.css');

$document->addScript(JURI::base() . 'components/com_promo/assets/js/jquery.min.js');
$document->addScript(JURI::base() . 'components/com_promo/assets/js/jquery.dataTables.min.js');
$document->addScript(JURI::base() . 'components/com_promo/assets/js/table_sort.js');

?>
<h1 class="title">Liste des situations des CONVPROJET</h1>

<a href="index.php?option=com_promo&view=convprojet&form=xls" class="btn btn-success">Export XLS</a>

<table class="table table-bordered mt30" id="myTable">
  <thead>
    <tr>
      <th>#</th>
      <th>CODE_PROD</th>
      <th>CODE_OPGI</th>
      <th>NUM_PROJ</th>
      <th>ANNEE</th>
      <th>LIB_PROJ</th>
      <th>NB_LOG</th>
      <th>SITE</th>
    </tr>
  </thead>

  <?php foreach ($convprojets as $key => $convprojet): ?>
    <tr>
      <td><?php echo $key+1 ?></td>
      <td><?php echo $convprojet->CODE_PROD ?></td>
      <td><?php echo $convprojet->CODE_OPGI ?></td>
      <td><?php echo $convprojet->NUM_PROJ ?></td>
      <td><?php echo $convprojet->ANNEE ?></td>
      <td><?php echo $convprojet->LIB_PROJ ?></td>
      <td><?php echo $convprojet->NB_LOG ?></td>
      <td><?php echo $convprojet->SITE ?></td>
    </tr>
  <?php endforeach ?>


</table>
