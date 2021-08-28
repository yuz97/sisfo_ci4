<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class SiswaSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama'  => 'rudi',
				'nik'	=> 2001,
				'kelas'	=> '2',
				'jurusan_id' => '1',
				'created_at' => Time::now(),
				'updated_at' => Time::tomorrow()
			],
			[
				'nama'  => 'rani',
				'nik'	=> 2000,
				'kelas'	=> '3',
				'jurusan_id' => '2',
				'created_at' => Time::now(),
				'updated_at' => Time::tomorrow()
			],
			[
				'nama'  => 'fikri',
				'nik'	=> 2003,
				'kelas'	=> '3',
				'jurusan_id' => '3',
				'created_at' => Time::now(),
				'updated_at' => Time::tomorrow()
			],
			[
				'nama'  => 'ridwan',
				'nik'	=> 2002,
				'kelas'	=> '1',
				'jurusan_id' => '4',
				'created_at' => Time::now(),
				'updated_at' => Time::tomorrow()
			],
			[
				'nama'  => 'andika',
				'nik'	=> 2004,
				'kelas'	=> '2',
				'jurusan_id' => '5',
				'created_at' => Time::now(),
				'updated_at' => Time::tomorrow()
			]
		];

		$this->db->table('siswa')->insertBatch($data);
	}
}
