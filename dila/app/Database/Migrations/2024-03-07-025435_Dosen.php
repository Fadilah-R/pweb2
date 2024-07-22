<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dosen extends Migration
{
    public function up()
    {
        //membuat kolom untuk tabel mhs
        $this->forge->addField([
            'nidn'        => [
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
            'prodi'        => [
                'type'      => 'VARCHAR',
                'constraint'      => 50,
                'null'      => false,
            ],
        ]);
        //membuat primary key
        $this->forge->addKey('nidn', TRUE);
        //membuat tabel mhs
        $this->forge->createTable('dosen', TRUE);
    }

    public function down()
    {
        // menghapus tabel news
		$this->forge->dropTable('dosen');
    }
}
