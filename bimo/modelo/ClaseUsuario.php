<?php
class ClaseUsuario
{
    
	private $pdo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = new PDO('mysql:host=localhost;dbname=bimo', 'root', '');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	        
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM usuario WHERE (rol = 4)");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new Usuario();

				$alm->__SET('id', $r->id);
				$alm->__SET('nombre', $r->nombre);
				$alm->__SET('tipo_documento', $r->tipo_documento);
                $alm->__SET('no_documento', $r->no_documento);
                $alm->__SET('rol', $r->rol);
				$alm->__SET('telefono', $r->telefono);
				$alm->__SET('email', $r->email);
				$alm->__SET('estado', $r->estado);

				$result[] = $alm;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuario WHERE id = ?");
			          

			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$alm = new Usuario();

			$alm->__SET('id', $r->id);
			$alm->__SET('nombre', $r->nombre);
			$alm->__SET('tipo_documento', $r->tipo_documento);
            $alm->__SET('no_documento', $r->no_documento);
            $alm->__SET('rol', $r->rol);
			$alm->__SET('telefono', $r->telefono);
			$alm->__SET('email', $r->email);
			$alm->__SET('estado', $r->estado);

			return $alm;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("DELETE FROM usuario WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Usuario $data)
	{
		try 
		{
			$sql = "UPDATE usuario SET 
						nombre          = ?, 
						tipo_documento  = ?,
						no_documento    = ?, 
                        telefono        = ?,
                        email           = ?,
                        estado          = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					strtoupper($data->__GET('nombre')), 
					$data->__GET('tipo_documento'), 
					$data->__GET('no_documento'),
                    $data->__GET('telefono'),
                    $data->__GET('email'),
                    $data->__GET('estado'),
					$data->__GET('id')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Usuario $data)
	{
		try 
		{
		$sql = "INSERT INTO usuario (nombre,tipo_documento,no_documento,rol,telefono,email,contrasena,estado) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
				strtoupper($data->__GET('nombre')), 
				$data->__GET('tipo_documento'), 
				$data->__GET('no_documento'),
				$data->__GET('rol'),
                $data->__GET('telefono'),
                $data->__GET('email'),
                md5($data->__GET('contrasena')),
                $data->__GET('estado'),
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
