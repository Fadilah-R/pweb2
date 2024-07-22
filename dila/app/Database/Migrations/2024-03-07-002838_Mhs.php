<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mhs extends Migration
{
    public function up()
    {
        //membuat kolom untuk tabel mhs
        $this->forge->addField([
            'npm'        => [
                'type'      => 'INT',
                'constraint'      => 10,
                'unsigned'        => true,
                'auto_increment'  => true,
                'null'  => false,
            ],
            'nama'        => [
                'type'      => 'VARCHAR',
                'constraint'      => 50,
                'null'      => false,
            ],
            'alamat'        => [
                'type'      => 'VARCHAR',
                'constraint'      => 50,
                'null'      => false,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);
        //membuat primary key
        $this->forge->addKey('npm', TRUE);
        //membuat tabel mhs
        $this->forge->createTable('mhs', TRUE);
    }

    public function down()
    {
        // menghapus tabel news
		$this->forge->dropTable('mhs');
    }
}
