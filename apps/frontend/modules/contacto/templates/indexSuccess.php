<div class="container">
<table class="table">
<?php foreach($contactos as $contacto): ?>

     <tr>
     <td><?php echo $contacto->username; ?></td>
     <td><?php echo link_to('Iniciar Conversacion', 'chat', array('id'=>$contacto->id)); ?></td>
     </tr> 
    

<?php endforeach; ?>
</table>
</div>
