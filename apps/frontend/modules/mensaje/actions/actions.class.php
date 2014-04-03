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
  public function executeIdex(sfWebRequest $request)
  {
   
  }
  public function executeIndex(sfWebRequest $request)
  {
    $this->formulario= new MensajeFormulario();
    if($this->getRequest()->isMethod('post'))
    {
      $this->procesarFormulario($request, $this->formulario);
    }
    
  }
  
  public function procesarFormulario(sfWebRequest $request, $form)
  {
     $form->bind(
      $request->getParameter($form->getName()),
      $request->getFiles($form->getName())
      );
    
    if ($form->isValid())
    {
      $usuario=$request->getUser();
      $mensaje= new Mensaje();
      $mensaje->emisor=$usuario;
      $mensaje->receptor= Doctrine::getTable('sfGuardUser')->find($request->getParameter('id'));
      $mensaje->mensaje=$form->getValues();
      $mensaje->save();
    }
  }
  
  
  
}
