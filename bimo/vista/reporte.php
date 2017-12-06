<?php 
    require_once '../modelo/Usuario.php';
    require_once '../modelo/ClaseUsuario.php';

    $alm = new Usuario();
    $model = new ClaseUsuario();
?>

<style type="text/css">
    body {font-family: Arial, Helvetica, sans-serif;}

    table {font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
        font-size: 12px;    margin: 45px;     width: 820px; text-align: left;    border-collapse: collapse; 
    }

    th {     font-size: 13px;     font-weight: normal;     padding: 8px;     background: #b9c9fe;
        border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; 
    }

    td {    padding: 8px;     background: #e8edff;     border-bottom: 1px solid #fff;
        color: #669;    border-top: 1px solid transparent; 
    }
</style>

<table style="text-align: center;">
    <thead>
        <tr>
            <th>Nombres y apellidos</th>
            <th>Tipo de documento</th>
            <th>Numero de documento</th>
            <th>Contacto</th>
            <th>Correo electronico</th>
            <th>Estado</th>
        </tr>
    </thead>
    <?php foreach($model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->__GET('nombre'); ?></td>
            <td><?php echo $r->__GET('tipo_documento'); ?></td>
            <td><?php echo $r->__GET('no_documento'); ?></td>
            <td><?php echo $r->__GET('telefono'); ?></td>
            <td><?php echo $r->__GET('email'); ?></td>
            <td><?php echo $r->__GET('estado'); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
