<?php
session_start();
if (!isset($_SESSION['roll'])) {
    header("location:../index.php");
    exit();
}

/*Consultar a la base de datos */

        $con = new mysqli('localhost','root','','utlogin');
         
        // connect_errno: Verifica si ocurrió un error al intentar conectar a la base de datos.
        // La propiedad 'connect_errno' pertenece al objeto de conexión mysqli.
        // Retorna un valor entero distinto de cero si hay un error de conexión, o cero si la conexión fue exitosa.
        // No recibe argumentos.
        // Se utiliza para manejar errores de conexión y tomar acciones apropiadas en caso de fallo.
        if($con->connect_errno){
            
        } else {
            $query = "select id, username, roll, visible from users";
            $result=$con->query($query);
            // $result = $stmt->get_result();
            var_dump($result);

        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
</head>

<body>
    <a href="logout.php">HOME DE ADMIN</a>

    <div class="user-info">
        Usuario: <?php echo $_SESSION['nombre']; ?>
        (ID: <?php echo $_SESSION['id']; ?>)

        <table border="black">
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>PERFIL</th>
                <th>VISUALIZAR</th>
                <th>NUEVO</th>
            </tr>
            <tbody>
                <?php
                while($row=$result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['roll'];?></td>
                    <td><a class="visible-on" href="#" data-id="<?php echo $row['visible'];?>"> <?php echo($row['visible']?'on':'off');?> </a></td>
                    <td>
                        <button class="btn btn-sm btn-warning">Editar</button>
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                    </td>
                </tr>
                <?php
                }
                ?>
                
            </tbody>
        </table>
    </div>

    <script>
        document.addEventListener('click',function(event){
            event.preventDefault();
            if(event.target.matches('.visible-on')){
                // alert(event.target.dataset.id);
                data.target.innerText="off";
            }
        });
    </script>

</body>

</html>