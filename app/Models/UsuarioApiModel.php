<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioApiModel extends Model
{
	protected $DBGroup = 'default';
	protected $table = 'usuario';
	protected $primaryKey = 'cod_usu';
	protected $useAutoIncrement = true;
	protected $insertID = 0;
	protected $returnType = 'array';
	protected $useSoftDeletes = true;
	protected $protectFields = true;
	protected $allowedFields = ["nom_usu", "log_usu", "pas_usu", "cod_per_usu"];

	// Dates
	protected $useTimestamps = true;
	protected $dateFormat = 'datetime';
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	// Validation
	protected $validationRules = [];
	protected $validationMessages = [];
	protected $skipValidation = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks = true;
	protected $beforeInsert = [];
	protected $afterInsert = [];
	protected $beforeUpdate = [];
	protected $afterUpdate = [];
	protected $beforeFind = [];
	protected $afterFind = [];
	protected $beforeDelete = [];
	protected $afterDelete = [];

	public function listatardatos($id = 0)
	{
		$array = ["nom_usu", "log_usu", "pas_usu", "cod_per_usu"];
		if ($id == 0) {
			$data = $this->select($array)->findAll();
		} else {
			$data = $this->select($array)->find($id);
		}
		return $data;
	}

	public function guardar($request)
	{
		// $hash = getenv('JWT_SECRET');
		$userlog = password_hash('contenidoweb@rbsas.com', PASSWORD_DEFAULT);
		$userpass = password_hash('3k477pl619dx', PASSWORD_DEFAULT);
		$data = [
			'nom_usu' => 'administrador',
			'log_usu' => 'contenidoweb@rbsas.com',
			'pas_usu' => $userpass,
			'cod_per_usu' => 1

		];
		$id = $this->insert($data);
		return $id;
	}

	public function edicion($id, $request)
	{
		$data = [
			'cod_usu' => $id,
			'nom_usu' => $request->getVar('nom_usu'),
			'log_usu' => $request->getVar('log_usu'),
			'pas_usu' => $request->getVar('pas_usu'),
			'cod_per_usu' => $request->getVar('cod_per_usu')

		];
		$confirmacion = $this->save($data);

		if ($confirmacion == 1) {
			return $id;
		}
	}

	public function borrar($id)
	{
		$id = $this->delete($id);
		return $id;
	}

}
/* fecha de creacion: 08-24-2022 05:44:59 pm */