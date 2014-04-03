<?php

/**
 * Mensaje form.
 *
 * @package    mensajeria
 * @subpackage form
 * @author     user
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MensajeForm extends BaseMensajeForm
{
  public function configure()
  {
    unset(
      $this['created_at'], $this['updated_at']);
  }
}
