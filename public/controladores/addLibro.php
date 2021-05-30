<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="UTF-8"> 
        <title>Crear Nuevo Usuario</title> 
        <style type="text/css" rel="stylesheet"> 
        .error{ 
        color: red; 
        } 
        </style> 
    </head> 
    <body> 
        <?php 
            //incluir conexión a la base de datos 
            include '../../config/conexionBD.php'; 
            $nombres = isset($_POST["nombres"]) ? trim($_POST["nombres"]) : null; 
            $isbn = isset($_POST["isbn"]) ? trim($_POST["isbn"]) : null; 
            $numero = isset($_POST["numero"]) ? trim($_POST["numero"])  : null; 
           
            $sql = "INSERT INTO libro VALUES (null, '$nombres', '$isbn', $numero)"; 
          // echo ($sql);
           
            if ($conn->query($sql) === TRUE) { 
                echo "<p>Se ha creado El Libro correctamemte!!</p>"; 
                echo "<a href='../vista/addCapitulos.php?isbn=$isbn'>Agregar Capitulos</a>"; 
            } else { 
                if($conn->errno == 1062){ 
                    echo "<p class='error'>El Libro con el $isbn ya esta registrada en el sistema </p>"; 
                }else{ 
                    echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>"; 
                } 
            } 
            
                //cerrar la base de datos 
            $conn->close(); 
            echo "<a href='../vista/Principal.html'>Regresar</a>"; 
        ?> 
    </body> 
</html>