<?php
require_once '../modelo/Usuario.php';
require_once '../modelo/ClaseUsuario.php';

class UsuarioControlador{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new ClaseUsuario();
    }
    
    public function Crud(){
        $alm = new Usuario();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once '../vista/header.php';
        require_once $alm->id > 0 
                        ? '../vista/anadir_usuario.php'
                        : '../vista/anadir_usuario.php'
                        ;
        require_once '../vista/footer.php';
    }
    
    public function CrearMultiple()
    {
            for($i = 0; $i < count($_POST['nombre']); $i++)
            {
                $alm = new Usuario();

                $alm->__SET('nombre',           $_POST['nombre'][$i]);
                $alm->__SET('tipo_documento',   $_POST['tipo_documento'][$i]);
                $alm->__SET('no_documento',     $_POST['no_documento'][$i]);
                $alm->__SET('rol',              $_POST['rol'][$i]);
                $alm->__SET('telefono',         $_POST['telefono'][$i]);
                $alm->__SET('email',            $_POST['email'][$i]);
                $alm->__SET('contrasena',       $_POST['contrasena'][$i]);
                $alm->__SET('estado',           $_POST['estado'][$i]);

                  $this->model->Registrar($alm);                                          
            }

            header('Location: ../vista/index_admin.php');
    }
}