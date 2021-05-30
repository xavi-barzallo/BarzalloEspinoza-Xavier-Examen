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
            <?php 
                $isbn=$_GET['isbn']; 
               echo ' <form id="formulario01" method="POST" action="../controladores/addCapitulos.php?isbn='.$isbn.'" >';
            ?>

           
                <h3 for="nombres">Numero de Capitulo (*)</h3>
                <input type="text" id="numCapi" name="numCapi" value="" placeholder="Ingrese el Numero del Capitulo ..."/>
                <br>
                <h3 for="nombres">Título (*)</h3>
                <input type="text" id="titulo" name="titulo" value="" placeholder="Ingrese el Nombre del Título ..."  />
               
                <br>
                <?php
        include "../../config/conexionBD.php";
        $sql = "SELECT aut_nombre FROM Autor";
        //echo $sql;
        echo '<select name="nomAutor" id="nomAutor">';
       //cambiar la consulta para puede buscar por ocurrencias de letras
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {              
               echo '<option value="'.$row['aut_nombre'].'">'.$row['aut_nombre'].'</option>';
           }
        }
        echo'</select>';
    ?>
    <br>
    <br>
    <br>
                <input type="submit" id="crear" name="crear" value="Ingresar" />
                <input type="reset" id="cancelar" name="cancelar" value="Regresar" onclick="location.href='Principal.html'" />
            </form>
    </div>
</div>
</body>

</html>