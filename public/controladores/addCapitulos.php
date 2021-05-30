<html> 
    <head> 
        <meta charset="UTF-8"> 
        <title>Crear Nuevo Usuario</title> 
        <style type="text/css" rel="stylesheet"> 
        .error{ 
        color: red; 
        } 
        </style> 
        <link href="estiloCapitulo.css" rel="stylesheet" />
    </head> 
    <body> 
    <div class="login">
    <div class="login-header">
        <h1>Ingreso </h1>
    </div>
    <div class="login-form">
        <?php 
        $isbn=$_GET['isbn']; 
            //incluir conexión a la base de datos 
            include '../../config/conexionBD.php'; 
            $numCapi = isset($_POST["numCapi"]) ? trim($_POST["numCapi"]) : null; 
            $titulo = isset($_POST["titulo"]) ? trim($_POST["titulo"]) : null; 
            $nomAutor = isset($_POST["nomAutor"]) ? trim($_POST["nomAutor"])  : null; 
           
           
            $sql = "SELECT lib_codigo from libro where lib_ISBN='$isbn'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    
                    $codLibro=$row['lib_codigo'];
                    
                }
            }
            $sql2 = "SELECT aut_codigo from autor where aut_nombre= '$nomAutor'";

            $result2 = $conn->query($sql2);
            if ($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()) {
                    
                    $codAutor=$row2['aut_codigo'];
                    
                }
            }
          
            $sql3 = "INSERT into capitulos values (null, $numCapi, '$titulo', $codLibro, $codAutor )";
            if ($conn->query($sql3) === TRUE) { 
                echo "<p>El capitulo se a creado correctament!!</p>"; 
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
        ?> 
        </div>
</div>
    </body> 
</html>