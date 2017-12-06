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

<h1 class="page-header" style="color: #1C5E55;">
    <?php echo $alm->__GET('id') != null ? $alm->__GET('nombre') : 'Añadir usuario privilegiado'; ?>
</h1>

<div class="well well-sm text-right">
    <a class="btn" style="color: red;" href="../vista/index_admin.php" title="Cancelar registro"><span class="icon-cross"></span></a>
</div>

<form id="frm-alumno" action="?c=Usuario&a=CrearMultiple" method="post" enctype="multipart/form-data">
    
    <div id="alumnos" class="row">
<div id="lo-que-vamos-a-copiar">
    <div class="col-xs-4">
        <div class="well well-sm">
            <div class="form-group">
                <label style="color: #1C5E55;"><span class="icon-user"></span> Nombres y apellidos</label>
                <input type="text" onkeypress="return soloLetras(event)" name="nombre[]" class="form-control" data-validacion-tipo="requerido" />
            </div>

            <div class="form-group">
                <label style="color: #1C5E55;">Tipo de documento</label>
                <select name="tipo_documento[]" class="form-control" data-validacion-tipo="select" />
                    <option value="0">-- Elija una opción --</option>
                    <option value="1">Cédula de ciudadania</option>
                    <option value="2">Tarjeta de identidad</option>
                    <option value="3">Cédula extranjera</option>
                </select>
            </div>

            <div class="form-group">
                <label style="color: #1C5E55;"><span class="icon-profile"></span> Número de documento</label>
                <input type="text" onkeypress="return soloNumeros(event)" name="no_documento[]" class="form-control" data-validacion-tipo="requerido" />
            </div>

            <div class="form-group">
                <label style="color: #1C5E55;">Rol de usuario</label>
                <select name="rol[]" class="form-control" data-validacion-tipo="select" />
                    <option value="0">-- Elija una opción --</option>
                    <option value="1">Administrador</option>
                    <option value="2">Supervisor</option>
                    <option value="3">Guarda</option>
                </select>
            </div>

            <div class="form-group">
                <label style="color: #1C5E55;"><span class="icon-phone"></span> Telefono celular</label>
                <input type="text" onkeypress="return soloNumeros(event)" name="telefono[]" class="form-control" data-validacion-tipo="requerido" />
            </div>

            <div class="form-group">
                <label style="color: #1C5E55;"><span class="icon-envelop"></span> Correo electrónico</label>
                <input type="text" name="email[]" class="form-control" data-validacion-tipo="requerido|email" />
            </div>

            <div class="form-group">
                <label style="color: #1C5E55;"><span class="icon-key"></span> Contraseña</label>
                <input type="password" name="contrasena[]" class="form-control" title="Caracteres minimos aceptados (8) - Simbolos aceptados por el sistema(¿?=$#/_-)" pattern="[a-zA-Z0-9_¿?=$#/_-]{8,50}" data-validacion-tipo="requerido" />
            </div>

            <div class="form-group">
                <label style="color: #1C5E55;">Estado</label>
                <select name="estado[]" class="form-control" data-validacion-tipo="select" />
                    <option value="0">-- Elija una opción --</option>
                    <option value="1">Activo</option>
                    <option value="2">Inactivo</option>
                </select>
            </div> 
        </div>
    </div>            
</div>
<div class="col-xs-4">
    
    <button id="btn-alumno-agregar" class="btn btn-lg btn-block btn-default" type="button" style="width: 15%; line-height: 60%;" title="Añadir formulario">
        <b> + </b>
    </button>                
</div>
    </div>
    
    <hr />
    
    <div class="text-center">
        <button class="btn btn-success">Registrar usuario(s)</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        
        // El formulario que queremos replicar
        var formulario_alumno = $("#lo-que-vamos-a-copiar").html();
        
// El encargado de agregar más formularios
$("#btn-alumno-agregar").click(function(){
    // Agregamos el formulario
    $("#alumnos").prepend(formulario_alumno);

    // Agregamos un boton para retirar el formulario
    $("#alumnos .col-xs-4:first .well").append('<button class="btn-danger btn btn-block btn-retirar-alumno" type="button">Retirar</button>');

    // Hacemos focus en el primer input del formulario
    $("#alumnos .col-xs-4:first .well input:first").focus();

    // Volvemos a cargar todo los plugins que teníamos, dentro de esta función esta el del datepicker assets/js/ini.js
    Plugins();
});
        
        // Cuando hacemos click en el boton de retirar
        $("#alumnos").on('click', '.btn-retirar-alumno', function(){
            $(this).closest('.col-xs-4').remove();
        })
            
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>

<?php
}
?>
