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

$marches = $this->data;
//var_dump($marches);

$file="paiement-cnl.xls";
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$file");

ob_start(); 
?>
<h1>Liste des situations des marchés</h1>


<table class="table table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>CODE_PROD</th>
      <th>CODE_OPGI</th>
      <th>CODE_OP</th>
      <th>LIB_PROJ</th>
      <th>LIB_MARCH</th>
      <th>CODE_WIL</th>
      <th>NUM_TR</th>
      <th>ANNEE</th>
      <th>NUM_PROJ</th>
      <th>DATE_SIT</th>
      <th>NAT_SIT</th>
      <th>NUM_OP</th>
      <th>DATE_OP</th>
      <th>MONT_OP</th>
      <th>MODE_PAY</th>
      <th>NUM_OV</th>
      <th>DATE_OV</th>
      <th>MONT_SIT</th>
      <th>MONT_RET</th>
      <th>REF_MARCH</th>
      <th>NUM_SIT</th>
      <th>Date_sai</th>
      <th>paye</th>
      <th>cpt</th>
    </tr>
  </thead>

  <?php foreach ($paiments as $key => $paiment): ?>
    <tr>
      <td><?php echo $key+1 ?></td>
      <td><?php echo $paiment->CODE_PROD ?></td>
      <td><?php echo $paiment->CODE_OPGI ?></td>
      <td><?php echo $paiment->CODE_OP ?></td>
      <td><?php echo $paiment->LIB_PROJ ?></td>
      <td><?php echo $paiment->LIB_MARCH ?></td>
      <td><?php echo $paiment->CODE_WIL ?></td>
      <td><?php echo $paiment->NUM_TR ?></td>
      <td><?php echo $paiment->ANNEE ?></td>
      <td><?php echo $paiment->NUM_PROJ ?></td>
      <td><?php echo $paiment->DATE_SIT ?></td>
      <td><?php echo $paiment->NAT_SIT ?></td>
      <td><?php echo $paiment->NUM_OP ?></td>
      <td><?php echo $paiment->DATE_OP ?></td>
      <td><?php echo $paiment->MONT_OP ?></td>
      <td><?php echo $paiment->MODE_PAY ?></td>
      <td><?php echo $paiment->NUM_OV ?></td>
      <td><?php echo $paiment->DATE_OV ?></td>
      <td><?php echo $paiment->MONT_SIT ?></td>
      <td><?php echo $paiment->MONT_RET ?></td>
      <td><?php echo $paiment->REF_MARCH ?></td>
      <td><?php echo $paiment->NUM_SIT ?></td>
      <td><?php echo $paiment->Date_sai ?></td>
      <td><?php echo $paiment->paye ?></td>
      <td><?php echo $paiment->cpt ?></td>
    </tr>
  <?php endforeach ?>

</table>

<?php
$content = ob_get_contents();
ob_get_clean();
echo $content;
exit ();
