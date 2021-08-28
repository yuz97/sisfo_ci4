<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class GuruSeeder extends Seeder
{
	public function run()
	{
		$time = Time::parse(date('d M Y, H:i:s'));
		$data = [
			[
				'nama'  => 'rudi mardani',
				'nip'	=> 9053,
				'jurusan'	=> 'Teknk Sipil',
				'alamat'	=> 'maros',
				'created_at' => $time->toDateTimeString(),
				'updated_at' => $time->toDateString()
			],
			[
				'nama'  => 'warni',
				'nip'	=> 9033,
				'jurusan'	=> 'Teknk Industri',
				'alamat'	=> 'makassar',
				'created_at' => $time->toDateTimeString(),
				'updated_at' => $time->toDateString()
			],
			[
				'nama'  => 'fikriadi',
				'nip'	=> 9002,
				'jurusan'	=> 'Teknk Mekatronika',
				'alamat'	=> 'maros',
				'created_at' => $time->toDateTimeString(),
				'updated_at' => $time->toDateString()
			],
			[
				'nama'  => 'ridwansyah',
				'nip'	=> 9003,
				'jurusan'	=> 'Teknk Mesin',
				'alamat'	=> 'maros',
				'created_at' => $time->toDateTimeString(),
				'updated_at' => $time->toDateString()
			],
			[
				'nama'  => 'ammy',
				'nip'	=> 9004,
				'jurusan'	=> 'Teknk Informatika',
				'alamat'	=> 'makassar',
				'created_at' => $time->toDateTimeString(),
				'updated_at' => $time->toDateString()
			]
		];

		$this->db->table('guru')->insertBatch($data);
	}
}
