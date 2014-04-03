<?php

/**
 * mensaje actions.
 *
 * @package    mensajeria
 * @subpackage mensaje
 * @author     user
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mensajeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $form->bind(
      $request->getParameter($form->getName()),
      $request->getFiles($form->getName())
      );
    
    if ($form->isValid())
    {
      $values = $form->getValues();
      $mensaje = new Mensaje();
      $mensaje->
  }
  
  public function procesarFormulario(sfWebRequest $request, $form)
  {
     $form->bind(
      $request->getParameter($form->getName()),
      $request->getFiles($form->getName())
      );
    
    if ($form->isValid())
    {
      $form->save();
    }
    
    $id=contacto->getId();
    $this->redirect('conversacion/'$id);
  }
    $this->redirect('conversacion/'$id);
  
  
  
  
}
