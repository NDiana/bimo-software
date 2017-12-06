<?php require_once("../modelo/ClaseLogin.php");
if(!isset($_SESSION["Admin"]))
{
?>
<script type='text/javascript'>
    alert('Inicia sesión para ver tu contenido');
    window.location='http://localhost/bimo/index.php';
</script> 
<?php
}else{
?>

<?php
require_once '../controlador/ControladorRegistro.php';

// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['c'])){
    $controller = new UsuarioControlador();
    $controller->Crud();    
} else {
    
    // Obtenemos el controlador que queremos cargar
    $controller = $_REQUEST['c'] . 'Controlador';
    $accion     = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    
    // Instanciamos el controlador
    $controller = new $controller();
    
    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}

?>

<?php
}
?>