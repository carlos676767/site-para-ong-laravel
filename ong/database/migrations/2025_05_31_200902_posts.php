<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("
        CREATE TABLE posts (
    id_post INT AUTO_INCREMENT PRIMARY KEY,
    autor_id INT NOT NULL,
    titulo VARCHAR(150) NOT NULL,
    subtitulo VARCHAR(200),
    conteudo MEDIUMTEXT,
    data_postagem DATE DEFAULT CURRENT_DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   FOREIGN KEY (autor_id) REFERENCES usuarios(id_user) ON DELETE CASCADE
);
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP TABLE IF EXISTS posts");
    }
};
