<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ingresar Libro</title>
    <script type="text/javascript" src="validaciones_usuario.js"></script>
    <link href="../controladores/estiloLibro.css" rel="stylesheet" />
    <style type="text/css">
        .error {
            color: rgb(255, 230, 0);
            font-size: 16px;
        }
    </style>
</head>
<div class="login">
    <div class="login-header">
        <h1>Ingreso </h1>
    </div>
    <div class="login-form">

        <body>
            <form id="formulario01" method="POST" action="../controladores/addLibro.php" >
                <h3 for="nombres">Nombre (*)</h3>
                <input type="text" id="nombres" name="nombres" value="" placeholder="Ingrese el nombre del libro ..."/>
                <br>
                <h3 for="nombres">ISBN (*)</h3>
                <input type="text" id="isbn" name="isbn" value="" placeholder="Ingrese el ISBN ..."  />
                
                <br>
                <h3 for="numero">Numero de Paginas (*)</h3>
                <input type="text" id="numero" name="numero" value="" placeholder="Ingrese el Numero de Paginas ..."  />
               
                <br>
                
                <input type="submit" id="crear" name="crear" value="Aceptar" />
                <input type="reset" id="cancelar" name="cancelar" value="Cancelar" onclick="location.href='Principal.html'" />
            </form>
    </div>
</div>
</body>

</html>