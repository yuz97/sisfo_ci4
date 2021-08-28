<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Guru extends Migration
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
			'nip' => [
				'type' 			 => 'INT',
				'constraint' 	 => '9',
			],
			'jurusan' => [
				'type' 			 => 'VARCHAR',
				'constraint' 	 => '20',
			],
			'alamat' => [
				'type' 			 => 'VARCHAR',
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
		$this->forge->createTable('guru');
	}

	public function down()
	{
		$this->forge->dropTable('guru');
	}
}
