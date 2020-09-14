<?php

include("../db.php");

if (isset ($_POST['comentarios'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $check_subscribe = $_POST['check_subscribe'];
    $check_privacy = $_POST['check_privacy'];
    $comentario = $_POST['comentario'];
    
    $query = "INSERT INTO comments(nombre,email,phone,check_subscribe,check_privacy,comentario) VALUES ('$nombre', '$email', '$phone', '$check_suscribe', '$check_privacy', '$comentario')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('Query Failed');
    }

    $_SESSION['message'] = 'Datos enviados correctamente';
    $_SESSION['message_type'] = 'success';

    header("location: art01.php");
}

?>