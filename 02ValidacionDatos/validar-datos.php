<?php
    $nombre="Diego";
    $password="bonilla";

    if(isset($_GET["enviar_hdn"])){
        if($nombre==$_GET["nombre_txt"] && $password==$_GET["password_txt"]){
            echo "El nombre que ingresaste por GET es ".$_GET["nombre_txt"].".<br>El Password que ingresaste por GET es ".$_GET["password_txt"]." .<br>El sexo que seleccionaste es ".$_GET["sexo_rdo"].".";
        } else {
            header("Location: formulario.php?error=si");
        }
    }
?>