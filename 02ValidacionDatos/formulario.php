<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Datos con PHP</title>
    <script>
        function validarDatosGET(){
            var verificar=true;

            if(!document.valida_datos_get_frm.nombre_txt.value){
                alert("El campo nombre es requerido");
                document.valida_datos_get_frm.nombre_txt.focus();
                verificar = false;
            }
        }


    </script>
</head>
<body>
    <hgroup><h1>Formulario de Datos GET</h1></hgroup>
    <form action="validar-datos.php" name="valida_datos_get_frm" method="get" enctype="application/x-www-form-urlencoded">
    Ingresa tu Nombre:
    <input type="text" name="nombre_txt">
    <br><br>
    Inngresa tu Password:
    <input type="password" name="password_txt">
    <br><br>
    <input type="radio" name="sexo_rdo" value="M">
    Masculino&nbsp;
    <input type="radio" name="sexo_rdo" value="F">
    Femenino&nbsp;
    <br><br>
    <input type="hidden" name="enviar_hdn" value="get">
    <input id="enviar-get" type="button" name="Enviar_btn" value="Enviar x GET" onclick="validarDatosGET();">



    </form>
</body>
</html>