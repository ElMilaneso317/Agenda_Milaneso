<?php 
include "../clases/Crud.php";
$crud = new Crud();
$id = $_GET['id'];

if($crud->destroy($id)){
    header("location:../index.php");
} else {
    echo "Fallo al eliminar el contacto";
}
?>
