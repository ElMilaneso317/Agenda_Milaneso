<?php 
include "../clases/Crud.php";
$crud = new Crud();

// Crear array con los datos del formulario
$datos = [
    "paterno" => $_POST["paterno"],
    "materno" => $_POST["materno"],
    "nombre" => $_POST["nombre"],
    "telefono" => $_POST["telefono"],
    "email" => $_POST["correo"],  // <-- clave correcta para BD
    "descripcion" => $_POST["descripcion"]
];

// Crear array con info de la foto
$datos_file = [
    "nombre" => $_FILES["foto"]["name"],
    "origen" => $_FILES["foto"]["tmp_name"],
    "destino" => "../public/upload/" . $_FILES["foto"]["name"],
];

$id_contacto = $crud->store($datos);

if ($id_contacto > 0) {
    if($crud->store_path($id_contacto, $datos_file["nombre"], $datos_file["destino"])){
        if(!move_uploaded_file($datos_file["origen"], $datos_file["destino"])){
            echo "Fallo al mover el archivo";
        } else {
            header("location:../index.php");
        }
    } else {
        echo "Fallo al agregar la ruta de la foto";
    }
} else {
    echo "Fallo al agregar el contacto";
}
?>
