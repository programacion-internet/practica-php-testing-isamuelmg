<?php
    include('conexion.php');

    if (!empty($_POST['tarea'])) {
        //Recibir datos
        $tarea = $_POST['tarea'];
        $descripcion = $_POST['descripcion'];
        $urgente= $_POST['urgente'];
        $tipo = $_POST['tipo'];
        $prioridad = $_POST['prioridad'];

        //Validar datos

        //Guardar a DB
        $sql = "INSERT INTO tareas (tarea, descripcion, urgente, tipo, prioridad) VALUES ('$tarea', '$descripcion', '$urgente', '$tipo', '$prioridad')";

        // use exec() because no results are returned
        $conn->exec($sql);

        header('Location: index.php');

    } else {
        echo "No hay datos";
    }
