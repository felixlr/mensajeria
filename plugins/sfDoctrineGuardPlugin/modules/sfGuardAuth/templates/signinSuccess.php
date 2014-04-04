<?php use_helper('I18N') ?>

<h1><?php echo __('Bienvenido', null, 'sf_guard') ?></h1>
<div class="form-group">
<?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>



</div>
