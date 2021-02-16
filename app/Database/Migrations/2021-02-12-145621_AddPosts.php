<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPosts extends Migration
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
			'title' => [
				'type' => 'VARCHAR',
				'constraint' => 128
			],
			'slug' => [
				'type' => 'VARCHAR',
				'constraint' => 128
			],
			'body' => [
				'type' => 'TEXT'
			]
		]);

		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('posts');
	}

	public function down()
	{
		//
		$this->forge->dropTable('posts');
	}
}
