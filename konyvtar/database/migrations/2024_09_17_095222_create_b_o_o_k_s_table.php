<?php

use App\Models\BOOKS;
use App\Models\User;
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
        Schema::create('b_o_o_k_s', function (Blueprint $table) {
            $table->id();
            $table->string('author');
            $table->string('title');
            $table->integer('pieces');

            $table->timestamps();
        });


        BOOKS::create(['author'=>'Hrabal', 'title'=>'Házimurik', 'pieces'=>40]);
        BOOKS::create(['author'=>'Calvino', 'title'=>'Ha egy téli éjsz', 'pieces'=>40]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('b_o_o_k_s');
    }
};
