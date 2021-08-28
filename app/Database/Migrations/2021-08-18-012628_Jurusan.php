<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jurusan extends Migration
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
			'nama_jurusan' => [
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
		$this->forge->createTable('jurusan');
	}

	public function down()
	{
		$this->forge->dropTable('jurusan');
	}
}
