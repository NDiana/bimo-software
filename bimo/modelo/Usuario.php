<?php
class Usuario
{
    private $id;
    private $nombre;
    private $tipo_documento;
    private $no_documento;
    private $rol;
    private $telefono;
    private $email;
    private $contrasena;
    private $estado;

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}