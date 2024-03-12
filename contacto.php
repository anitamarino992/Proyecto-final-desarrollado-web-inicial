<?php 
include ("header.php");
?>

<section class="contactocontenido">
    <form action="enviarconsulta.php" method="post">
     <label for="nombre"> Nombre</label>
     <input type="text" name= "nombre" class="contactoinput">
     <label for="apellido"> Apellido</label>
     <input type="text" name= "apellido" class="contactoinput">
     <label for="correo"> Correo</label>
     <input type="text" name= "correo" class="contactoinput">
     <label for="mensaje"> Mensaje</label>
     <textarea name= "mensaje" class="contactoinput" cols="30" rows="5"> </textarea>
     <input type="submit" value="Enviar Consulta" class="contacto_btn">
    </form>

<?php
if (isset ($_GET['ok'])){
    echo "<h3> SU mensaje fue enviado con exito</h3>";
}
 ?>
</section>
<?php 
include ("footer.php")
?>