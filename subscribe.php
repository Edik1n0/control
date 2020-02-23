<?php

include("db.php");

if (isset ($_POST['subscribe'])){
    $correo = $_POST['correo'];

    $query = "INSERT INTO correos(correo) VALUES ('$correo')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('Query Failed');
    }

    $_SESSION['message'] = 'Correo guardado satisfactoriamente';
    $_SESSION['message_type'] = 'secondary';

    header("location:  index.php");
}

?>