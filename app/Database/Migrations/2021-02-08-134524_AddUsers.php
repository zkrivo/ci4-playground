<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUsers extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => true
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 128
			],
			'surname' => [
				'type' => 'VARCHAR',
				'constraint' => 128
			],
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => 128
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => 64
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			]
		]);

		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('users');
	}

	public function down()
	{
		//
		$this->forge->dropTable('users');
	}
}
