<h1><div class="row" >Conversación con <?php echo $usuarioreceptor; ?></div></h1>


<div style="max-height:400px;overflow:auto;">
  
<?php foreach($mensajes as $mensaje): ?>

  <?php echo "<b>".$mensaje->nombre_emisor."</b>: ".$mensaje->mensaje."<br>"; ?>

<?php endforeach; ?>
</div>
<table class="table">
<form action="" method="post">
  <tr><td>

  <?php echo $formulario->renderHiddenFields(); ?>
  
  <?php if ($formulario['mensaje']->hasError()): ?>
      <?php echo $formulario['mensaje']->renderError(); ?>
  <?php endif;?>

        <?php echo $formulario['mensaje']; ?>

</td>
<td>
  <input type="submit" class="btn btn-warning btn-lg" value="Enviar" name="Enviar">
</td>
<td>
<?php echo link_to('<i class="glyphicon glyphicon-remove"> Salir</i>','principal', array(), array('class'=>'btn btn-danger btn-lg')); ?>
</td>
</tr>
</form>
</table>
<br>

