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

$file="convprojet-cnl.xls";
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$file");

ob_start(); 
?>
<h1>Liste des situations des marchés</h1>


<table class="table table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>Code OPGI</th>
      <th>code_prod</th>
      <th>CODE_OP</th>
      <th>REF_MARCH</th>
      <th>LIB_MARCH</th>
      <th>MONTANT_mar</th>
      <th>type_march</th>
    </tr>
  </thead>

  <?php foreach ($marches as $key => $marche): ?>
    <tr>
      <td><?php echo $key+1 ?></td>
      <td><?php echo $marche->code_opgi ?></td>
      <td><?php echo $marche->code_prod ?></td>
      <td><?php echo $marche->CODE_OP ?></td>
      <td><?php echo $marche->REF_MARCH ?></td>
      <td><?php echo $marche->LIB_MARCH ?></td>
      <td><?php echo $marche->MONTANT_mar ?></td>
      <td><?php echo $marche->type_march ?></td>
    </tr>
  <?php endforeach ?>

</table>

<?php
$content = ob_get_contents();
ob_get_clean();
echo $content;
exit ();
