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
    <?php echo $alm->__GET('id') != null ? $alm->__GET('nombre') : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Usuario" style="color: #1CA794;">Lista de Usuarios Registrados</a></li>
  <li class="active"><?php echo $alm->__GET('id') != null ? $alm->__GET('nombre') : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=Usuario&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
    
    <div class="form-group">
        <label style="color: #1C5E55;"><span class="icon-user"></span> Nombres y apellidos</label>
        <input type="text" onkeypress="return soloLetras(event)" name="nombre" value="<?php echo $alm->__GET('nombre'); ?>" class="form-control" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label style="color: #1C5E55;">Tipo de documento</label>
        <select name="tipo_documento" class="form-control">
            <option <?php echo $alm->__GET('tipo_documento') == 1 ? 'selected' : ''; ?> value="1">Cédula de ciudadania</option>
            <option <?php echo $alm->__GET('tipo_documento') == 2 ? 'selected' : ''; ?> value="2">Tarjeta de identidad</option>
            <option <?php echo $alm->__GET('tipo_documento') == 3 ? 'selected' : ''; ?> value="3">Cédula extranjera</option>
        </select>
    </div>

    <div class="form-group">
        <label style="color: #1C5E55;"><span class="icon-profile"></span> Número de documento</label>
        <input type="text" onkeypress="return soloNumeros(event)" name="no_documento" value="<?php echo $alm->__GET('no_documento'); ?>" class="form-control" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label style="color: #1C5E55;"><span class="icon-phone"></span> Telefono celular</label>
        <input type="text" onkeypress="return soloNumeros(event)" name="telefono" value="<?php echo $alm->__GET('telefono'); ?>" class="form-control" data-validacion-tipo="requerido" />
    </div>

    <div class="form-group">
        <label style="color: #1C5E55;"><span class="icon-envelop"></span> Correo electrónico</label>
        <input type="text" name="email" value="<?php echo $alm->__GET('email'); ?>" class="form-control" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@misena.edu.co" title="Por favor introduzca la dirección de correo electrónico requerida. Ejemplo: tucuenta@misena.edu.co" data-validacion-tipo="requerido|email" />
    </div>

    <div class="form-group">
        <label style="color: #1C5E55;">Estado</label>
        <select name="estado" class="form-control">
            <option <?php echo $alm->__GET('estado') == 1 ? 'selected' : ''; ?> value="1">Activo</option>
            <option <?php echo $alm->__GET('estado') == 2 ? 'selected' : ''; ?> value="2">Inactivo</option>
        </select>
    </div>
    
    <hr />
    
    <div class="text-center">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>

<?php
}
?>
