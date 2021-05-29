<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ingresar Capitulo</title>
    <script type="text/javascript" src="validaciones_usuario.js"></script>
    <link href="../controladores/estiloCapitulo.css" rel="stylesheet" />
    <style type="text/css">
        .error {
            color: rgb(255, 230, 0);
            font-size: 16px;
        }
    </style>
</head>
<div class="login">
    <div class="login-header">
        <h1>Ingresar Capitulo</h1>
    </div>
    <div class="login-form">

        <body>
            <form id="formulario01" method="POST" action="../controladores/addLibro.php" >
                <h3 for="nombres">Numero de Capitulo (*)</h3>
                <input type="text" id="numCapi" name="numCapi" value="" placeholder="Ingrese el Numero del Capitulo ..."/>
                <br>
                <h3 for="nombres">Título (*)</h3>
                <input type="text" id="titulo" name="titulo" value="" placeholder="Ingrese el Nombre del Título ..."  />
               
                <br>
                
                <input type="submit" id="crear" name="crear" value="Ingresar" />
                <input type="reset" id="cancelar" name="cancelar" value="Regresar" onclick="location.href='login.html'" />
            </form>
    </div>
</div>
</body>

</html>