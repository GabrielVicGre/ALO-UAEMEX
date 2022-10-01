<?php

$upload_url = "../Uploads/";
$upload_file = $upload_url.basename($_FILES['file']['name']);

if(move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
    echo "Archivo sudido con éxito!!";
} else {
    echo "Error al subir el archivo";
}