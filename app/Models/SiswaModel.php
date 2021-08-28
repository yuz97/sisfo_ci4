<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
	protected $table                = 'siswa';
	protected $primaryKey           = 'id';
	protected $allowedFields		= ['nama', 'nik', 'kelas', 'jurusan_id', 'created_at', 'updated_at'];
	protected $useTimestamps		= true;
	protected $returnType     		= 'array';

	public function getSiswa()
	{
		// return $this->table('siswa')->join('jurusan', 'jurusan.id=siswa.jurusan_id', 'left')->get()->getResultArray();
		return $this->table('siswa')->join('jurusan', 'jurusan.id=siswa.jurusan_id', 'left');
	}
}
