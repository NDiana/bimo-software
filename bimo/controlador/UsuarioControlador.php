<?php
require_once '../modelo/Usuario.php';
require_once '../modelo/ClaseUsuario.php';

class UsuarioControlador{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new ClaseUsuario();
    }
    
    public function Index(){
        require_once '../vista/header.php';
        require_once '../vista/lista_de_usuarios.php';
        require_once '../vista/footer.php';
    }
    
    public function Crud(){
        $alm = new Usuario();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once '../vista/header.php';
        require_once $alm->id > 0 
                        ? '../vista/editar_usuario.php'
                        : '../vista/nuevo_usuario.php'
                        ;
        require_once '../vista/footer.php';
    }
    
    public function Guardar(){
        $alm = new Usuario();
        
        $alm->__SET('id',               $_REQUEST['id']);
        $alm->__SET('nombre',           $_REQUEST['nombre']);
        $alm->__SET('tipo_documento',   $_REQUEST['tipo_documento']);
        $alm->__SET('no_documento',     $_REQUEST['no_documento']);
        $alm->__SET('telefono',         $_REQUEST['telefono']);
        $alm->__SET('email',            $_REQUEST['email']);
        $alm->__SET('estado',           $_REQUEST['estado']);

        $this->model->Actualizar($alm); 
              
        header('Location: ../vista/index_admin.php');
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
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: ../vista/index_admin.php');
    }
}