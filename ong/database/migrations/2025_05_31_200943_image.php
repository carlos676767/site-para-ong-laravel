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
       CREATE TABLE imagens_posts (
    id_imagem INT AUTO_INCREMENT PRIMARY KEY,
    post_id INT NOT NULL,
    image_name VARCHAR(255) NOT NULL,
     FOREIGN KEY (post_id) REFERENCES posts(id_post) ON DELETE CASCADE
);
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP TABLE IF EXISTS imagens_posts");
    }
};
