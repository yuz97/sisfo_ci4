<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdiModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'prodi';
	protected $primaryKey           = 'id';
	protected $allowedFields        = ['nama_prodi', 'kode_prodi', 'fakultas'];

	public function getJurusan()
	{
		return $this->table('prodi')->join('jurusan', 'jurusan.id=prodi.nama_prodi', 'left')->get()->getResultArray();
	}
}
