<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class JurusanSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama_jurusan' 	=> 'Teknik Elektro',
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama_jurusan' 	=> 'Teknik Komputer',
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama_jurusan' 	=> 'Teknik Informatika',
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama_jurusan' 	=> 'Sistem Informasi',
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama_jurusan' 	=> 'Manajemen Informatika',
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],

		];
		$this->db->table('jurusan')->insertBatch($data);
	}
}
