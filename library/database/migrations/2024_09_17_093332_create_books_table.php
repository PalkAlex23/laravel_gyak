<?php

use App\Models\Book;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('author', 32);
            $table->string('title', 150);
            $table->integer('pieces');
            $table->timestamps();
        });

        Book::create([
            'author' => 'Stephen King', 
            'title' => 'A ragyogás',
            'pieces' => 100, 
        ]);

        Book::create([
            'author' => 'Isaac Asimov', 
            'title' => 'Én, a robot',
            'pieces' => 55, 
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
