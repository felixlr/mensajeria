<h1>Conversación con <?php echo $usuarioreceptor; ?></h1>

<div class="container">
<?php foreach($mensajes as $mensaje): ?>

  <?php echo $mensaje->nombre_emisor." - - ".$mensaje->mensaje."<br>"; ?>

<?php endforeach; ?>
</div>

<form action="" method="post">
  
<?php echo $formulario; ?>
<input type="submit" class="btn btn-primary" value="Enviar" name="Enviar">
</form>
<?php echo button_to('Salir de la conversacion','principal'); ?>
