<?php 
include "../clases/Crud.php";
$crud = new Crud();

$id = $_POST["id"];
$datos = [
    "paterno" => $_POST["paterno"],
    "materno" => $_POST["materno"],
    "nombre" => $_POST["nombre"],
    "telefono" => $_POST["telefono"],
    "email" => $_POST["correo"],  // <-- clave correcta
    "descripcion" => $_POST["descripcion"]
];

if ($crud->update($id,$datos)) {
    header("location:../index.php");
} else {
    echo "Fallo al actualizar el contacto";
}
?>
