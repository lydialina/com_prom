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
class PromoModelPromoRejeter extends JModelList {

/*
|------------------------------------------------------------------------------------
| Set new Promo
|------------------------------------------------------------------------------------
*/
    public function setPromoRejeter($object){
      $result = JFactory::getDbo()->insertObject('#__cnl_promo_rejeter', $object);
      return $result;
    }
   
/*
|------------------------------------------------------------------------------------
| Get Promos
|------------------------------------------------------------------------------------
*/
    public function getPromoRejeter(){
      $db = JFactory::getDBO();
      $query = $db->getQuery(true);    
      $query
          ->select('*')
          ->from($db->quoteName('#__cnl_promo_rejeter'));
      
      $db->setQuery($query);
      $results = $db->loadObjectList();
      return $results;
    }
   

}
