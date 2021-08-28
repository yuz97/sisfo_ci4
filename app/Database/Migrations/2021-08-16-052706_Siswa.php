<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
	public function up()
	{

		$this->forge->addField([
			'id' => [
				'type' 			 => 'INT',
				'constraint' 	 => '11',
				'unsigned' 		 => true,
				'auto_increment' => true

			],
			'nama' => [
				'type' 			 => 'VARCHAR',
				'constraint' 	 => '100',

			],
			'nik' => [
				'type' 			 => 'INT',
				'constraint' 	 => '9',
			],
			'kelas' => [
				'type' 			 => 'INT',
				'constraint' 	 => '20',
			],
			'jurusan_id' => [
				'type' 			 => 'INT',
				'constraint' 	 => '20',
			],
			'created_at' => [
				'type' 			=> 'TIMESTAMP',
				'null' 			=> true
			],
			'updated_at' => [
				'type'			=> 'TIMESTAMP',
				'null'			=> true
			]
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('siswa');
	}

	public function down()
	{
		$this->forge->dropTable('siswa');
	}
}
