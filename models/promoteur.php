<?php
/**
 * @version     1.0.0
 * @package     com_promo
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Kouceyla Hadji <hadjikouceyla@gmail.com> - http://www.behance.net/kossa
 */
defined('_JEXEC') or die;

jimport('joomla.application.component.modellist');

/**
 * Methods supporting a list of Promo records.
 */
class PromoModelPromoteur extends JModelList {

/*
|------------------------------------------------------------------------------------
| vérifier l'identité du promoteur , code promo existe ds la table ?
| Input/ CODE_OPGI  
| Output/ true or false
|------------------------------------------------------------------------------------
*/
  public function verif_prom_info ($where='') {
   
    $db = JFactory::getDBO();
    $query = $db->getQuery(true);    
    $query
        ->select($db->quoteName(array('code_opgi')))
        ->from($db->quoteName('opgi'));

    if ($where != '') {
      $query->where($where);
    }
    
    $db->setQuery($query);
    $results = $db->loadObject();
    return ($results); 
  }


/*
|------------------------------------------------------------------------------------
| vérifier l'identité du promoteur , Num Registre existe ds la table ?
| Input/ RC 
| Output/ true or false
|------------------------------------------------------------------------------------
*/
  public function verif_RC ($RC='') {
    if ($RC=='') {
      return false;
    }

    $db = JFactory::getDBO();
    $query = $db->getQuery(true);    
    $query
        ->select($db->quoteName(array('Num_Rc')))
        ->from($db->quoteName('promoteur'))
        ->where($db->quoteName('Num_Rc') . ' = "'. ($RC) .'"' ); // ajouter des quotes pour afficher string $RC

    $db->setQuery($query);
    $results = $db->loadObject();
    return (!is_null($results)); 
  }

/*
|------------------------------------------------------------------------------------
| Get the code + wilaya by ID USER
|------------------------------------------------------------------------------------
*/
  public function getCodeOPGI($id){
    $db = JFactory::getDBO();
    $query = $db->getQuery(true);    
    $query
        ->select($db->quoteName(array('CODE_OPGI')))
        ->from($db->quoteName('#__cnl_promo_user'))
        ->where($db->quoteName('id_user') . ' = '. $id);
    
    $db->setQuery($query);
    $result = $db->loadObject();
    return $result;
  }

/*
|------------------------------------------------------------------------------------
| Get marche
|------------------------------------------------------------------------------------
*/
  public function getMarche($code){
    $db = JFactory::getDBO();
    $query = $db->getQuery(true);    
    $query
        ->select('*')
        ->from($db->quoteName('marches'))
        ->where($db->quoteName('code_opgi') . ' = '. $code);
    
    $db->setQuery($query);
    $results = $db->loadObjectList();
    return $results;
  }

/*
|------------------------------------------------------------------------------------
| Get convcadre
|------------------------------------------------------------------------------------
*/
  public function getConvcadre($code){
    $db = JFactory::getDBO();
    $query = $db->getQuery(true);    
    $query
        ->select('*')
        ->from($db->quoteName('convcadre'))
        ->where($db->quoteName('CODE_OPGI') . ' = '. $code);
    
    $db->setQuery($query);
    $results = $db->loadObjectList();
    return $results;
  }

/*
|------------------------------------------------------------------------------------
| Get getConvProject
|------------------------------------------------------------------------------------
*/
  public function getConvProject($code){
    $db = JFactory::getDBO();
    $query = $db->getQuery(true);    
    $query
        ->select('*')
        ->from($db->quoteName('convprojet'))
        ->where($db->quoteName('CODE_OPGI') . ' = '. $code);
    
    $db->setQuery($query);
    $results = $db->loadObjectList();
    return $results;
  }

/*
|------------------------------------------------------------------------------------
| Get getPaiment
|------------------------------------------------------------------------------------
*/
  public function getPaiment($code){
    $db = JFactory::getDBO();
    $query = $db->getQuery(true);    
    $query
        ->select('*')
        ->from($db->quoteName('paiements'))
        ->where($db->quoteName('CODE_OPGI') . ' = '. $code);
    
    $db->setQuery($query);
    $results = $db->loadObjectList();
    return $results;
  }

}