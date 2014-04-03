<?php

class MensajeFormulario extends sfForm
{
    public function configure(){
    $this->setWidgets(array(
        'mensaje' => new sfWidgetFormTextArea(),
        ));
    
    $this->setValidators(array(
        'mensaje' => new sfValidatorString(array('min_length'=> 1)),
        ));
    
    $this->widgetSchema->setNameFormat('contacto[%s]');
    }
}
?>
