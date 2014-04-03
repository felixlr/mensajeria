<?php use_helper('I18N') ?>

<h2><?php echo __('No tienes permiso para acceder a esta pagina', null, 'sf_guard') ?></h2>

<p><?php echo sfContext::getInstance()->getRequest()->getUri() ?></p>

<h3><?php echo __('Conectate para acceder', null, 'sf_guard') ?></h3>

<?php echo get_component('sfGuardAuth', 'signin_form') ?>
