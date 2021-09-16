<?php
    if(isset($_POST['asunto'])&& !empty($_POST['asunto'])&&
    isset($_POST['mensaje'])&& !empty($_POST['mensaje']))
{
    $destino = "gabrielaxdiaz1@gmail.com";
    $desde = "From". "Codigofacilito";
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    mail ($destino,$asunto,$mensaje,$desde);
    echo "Correo enviado";
}else{

    echo "Hubo problemas";

}
?>

