<?php 
include ("header.php");
?>
<section class="contenedor">
    <div class="btn_catalogo">
<ul>
    <li><a href="catalogo.php?nom=cs">LOCAL</a></li>
    <li><a href="catalogo.php?nom=dp">WHATSAPP</a></li>
    <li><a href="catalogo.php?nom=acc">ENVIOS</a></li>
    
</ul>
</div>
</section>
<?php 
$elemento = "";
$info = "";
$img = "";

if (isset($_GET['nom'])){
    switch ($_GET['nom']){
        case 'cs' :
            $elemento = "LOCAL";
            $info = "Vení a visitarnos a nuestro local exclusivo, ubicado en Salta 2064, Bella Vista, Corrientes";
            $img = "./img/nosotros/local.jpeg";
            break;
            case 'dp' :
                $elemento = "WHATSAPP";
                $info = "Comunicate para que te podamos asesorar al +54 9 11 1234-5678.";
                $img = "./img/nosotros/WhatsApp-logo.png";
                break;
                case 'acc' :
                    $elemento = "WHATSAPP";
                    $info = "PARA COORDINAR EL ENVIO:
                    - Envianos un whatsapp aclarándonos tu nombre, nro de pedido y cual es el transporte elegido para el envio
                    - El costo de envio depende únicamente del transporte elegido: lo abonás en destino al recibir el pedido.
                    - Podés elegir el expreso o transporte que quieras
                    - Recordá que no trabajamos con andreani
                    - El tiempo que demoran los pedidos en llegar a destino dependen únicamente del transporte-correo.
                    - Correo Argentino estipula que la demora de los paquetes en llegar a destino es de 2 a 5 días hábiles desde que se DESPACHA el pedido. Pero puede tardar más o menos tiempo.";
                    $img = "./img/nosotros/correo.jpg";
                    break;        
    }
}
?>

<div class=".info_catalogo">
<h2 class="titulo"> <?php echo $elemento; ?></h2>
<p> <?php echo $info; ?></p>
<div class="catalogo_imagenes">
    <img src="<?php echo $img ?>" alt="imagen ilustrativa">

</div>
</div>

<?php 
include ("footer.php")
?>