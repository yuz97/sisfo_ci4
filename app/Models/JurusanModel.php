<?php

namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'jurusan';
	protected $primaryKey           = 'id';
	protected $allowedFields        = ['nama_jurusan', 'created_at', 'updated_at'];
}
