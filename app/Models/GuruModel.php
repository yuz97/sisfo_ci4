<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'guru';
	protected $primaryKey           = 'id';
	protected $allowedFields        = ['nama', 'nip', 'jurusan', 'alamat', 'created_at', 'updated_at'];
}
