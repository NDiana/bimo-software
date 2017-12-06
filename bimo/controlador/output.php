<?php
$tipo = isset($_REQUEST['t']) ? $_REQUEST['t'] : 'pdf';

if($tipo == 'pdf'){
    
    require_once '../dompdf/dompdf_config.inc.php';
    
    $dompdf = new DOMPDF();
    $dompdf->set_paper('a4', 'landscape');
    $dompdf->load_html( file_get_contents( 'http://localhost/bimo/vista/reporte.php' ) );
    $dompdf->render();
    $dompdf->stream("Usuarios_registrados.pdf");
}