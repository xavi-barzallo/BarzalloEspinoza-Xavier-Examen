<?php
 //incluir conexión a la base de datos
 include "../../config/conexionBD.php";
 $autor = $_GET['autor'];
echo $autor;
 $sql = "SELECT * FROM autor a , capitulos c, libro l WHERE  a.aut_codigo=c.cod_autor AND l.lib_codigo=c.cod_libro AND a.aut_nombre='$autor'";

//cambiar la consulta para puede buscar por ocurrencias de letras
 $result = $conn->query($sql);
 echo " <table style='width:100%'>
 <tr>
 <th>Autor</th>
 <th>Nacionalidad</th>
 <th>Nombre del Libro</th>
 <th>ISBN</th>
 <th>Numero de Paginas</th>
 <th>Titulo Capitulo</th>
 <th>Numero Capitulo</th>
 
 </tr>";
 if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {

 echo "<tr>";
 echo " <td>" . $row['aut_nombre'] . "</td>";
 echo " <td>" . $row['aut_nacionalidad'] . "</td>";

 echo " <td>" . $row['lib_nombre'] . "</td>";
 echo " <td>" . $row['lib_ISBN'] . "</td>";
 echo " <td>" . $row['lib_num_pag'] . "</td>";

 echo " <td>" . $row['cap_titulo'] . "</td>";
 echo " <td>" . $row['cap_numero'] . "</td>";
  
 echo "</tr>";
 }
 } else {
 echo "<tr>";
 echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
 echo "</tr>";
 }
 echo "</table>";
 $conn->close();

?>