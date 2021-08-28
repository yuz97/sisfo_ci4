<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prodi extends Migration
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
			'nama_prodi' => [
				'type' 			 => 'VARCHAR',
				'constraint' 	 => '100',

			],
			'kode_prodi' => [
				'type' 			 => 'VARCHAR',
				'constraint' 	 => '100',

			],
			'fakultas' => [
				'type' 			 => 'VARCHAR',
				'constraint' 	 => '100',

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
		$this->forge->createTable('prodi');
	}

	public function down()
	{
		$this->forge->dropTable('prodi');
	}
}
