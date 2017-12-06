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

<!-- Titulo principal y opciones principales !-->

<br><br>

<center>

<table border="0" style="width: 99%;">
    <tr>
        <td style="width: 50%;">
            <img src="../uploads/logo.png" style="width: 70%;">
        </td>
        <td style="width: 20%;">
            <div class="form-group">
                <select name="forma" onchange="location = this.value;" class="form-control" />
                    <option value="../vista/index_admin.php"">Bienvenido(a) <?php echo $_SESSION['Admin'];?></option>
                    <option value="../vista/perfil_admin.php">Editar perfil</option>
                    <option value="../vista/consultar.php">Realizar consulta</option>
                    <option value="../vista/index_anadir.php"">Añadir usuario privilegiado</option>
                    <option value="../vista/generar_reporte.php">Generar reporte según criterio de búsqueda</option>
                </select>
            </div>
        </td>
    </tr>
</table>

</center>

<br>

<!-- Imagen linea horizontal de colores !-->

<img src="../uploads/linea.png" width="100%">

<!-- Opciones de administrador !-->

<h1 class="page-header" style="color: #1C5E55;">Lista de Usuarios Registrados <font face="calibri light" style="font-size: 20px;">(Usuarios comunes)</font></h1>

<div class="well well-sm text-right">
    <a class="btn" style="color: #1CA794;" href="?c=Usuario&a=Crud" title="Nuevo usuario común"><span class="icon-plus"></span></a>

    &nbsp

    <a class="btn" style="color: red;" href="../vista/desconectar2.php" title="Cerrar sesión"><span class="icon-switch"></span></a>
</div>

<br>

<center>
    <a class="btn" style="color: #1CA794;" href="../controlador/output.php?t=pdf" title="Descargar reporte" target="_blank">
        Descargar Reporte de Usuarios Registrados &nbsp <span class="icon-download3"></span>
    </a> 
</center>                

<br><br>

<table class="table table-striped" style="text-align: center;">
    <thead>
        <tr>
            <th style="width:180px; text-align: center; color: #1C5E55;">
                
                <span class="icon-user"></span> Nombres y apellidos 

                <br><br>
            </th>
            <th style="width:180px; text-align: center; color: #1C5E55;">

                <span class="icon-clipboard"></span> Tipo de documento 

                <br><br>
            </th>
            <th style="width:180px; text-align: center; color: #1C5E55;">

                <span class="icon-profile"></span> Número de documento 

                <br><br>
            </th>
            <th style="width:120px; text-align: center; color: #1C5E55;">

                <span class="icon-phone"></span> Contacto 

                <br><br>
            </th>
            <th style="width:60px; text-align: center; color: #1C5E55;">

                <span class="icon-envelop"></span> Correo electrónico 

                <br><br>
            </th>
            <th style="width:60px; text-align: center; color: #1C5E55;">

                Estado 

                <br><br>
            </th>
            <th style="width:60px; text-align: center; color: #1C5E55;"></th>
        </tr>
    </thead>
    
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->__GET('nombre'); ?></td>
            <td><?php echo $r->__GET('tipo_documento'); ?></td>
            <td><?php echo $r->__GET('no_documento'); ?></td>
            <td><?php echo $r->__GET('telefono'); ?></td>
            <td><?php echo $r->__GET('email'); ?></td>
            <td><?php echo $r->__GET('estado'); ?></td>
            <td>
                <a class="btn" style="color: #1CA794;" title="Actualizar" href="?c=Usuario&a=Crud&id=<?php echo $r->id; ?>"><span class="icon-pencil"></span></a>
            </td>
        </tr>
    <?php endforeach; ?>
    
    <tfoot>
        
    </tfoot>
</table> 

<?php
}
?>
