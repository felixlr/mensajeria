  <div class="container">
       <h1>Bienvenido <?php echo $usuario; ?>
     <span style="align:right;">
      <?php echo link_to('Cerrar sesion', 'sf_guard_signout', array(), array('class'=>'btn btn-danger'));?>
     </span>
     </h1>
<br>
<h4>Lista de usuarios</h4>
    <table class="table">
<?php foreach($contactos as $contacto): ?>

     <tr>
     <td><?php echo $contacto->username; ?></td>
     <td><?php echo link_to('<i class="glyphicon glyphicon-edit"></i>', 'chat', array('id'=>$contacto->id), array('class'=>'btn btn-primary')); ?></td>
     </tr> 
    

<?php endforeach; ?>
</table>
</div>
