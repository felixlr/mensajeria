<?php

/**
 * contacto actions.
 *
 * @package    mensajeria
 * @subpackage contacto
 * @author     user
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactoActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->contactos = Doctrine::getTable('Contacto')->getActivas();
    $this->usuario = $this->getUser()->getGuardUser()->getUserName();
  }
  
  public function executeMostrar(sfWebRequest $request)
  {
      
  }
  
  
}
