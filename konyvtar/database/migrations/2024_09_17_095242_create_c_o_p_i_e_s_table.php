<?php

use App\Models\COPIES;
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
        Schema::create('c_o_p_i_e_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->references('id')->on('b_o_o_k_s');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        COPIES::create(['book_id'=>1, 'user_id'=>1]);
        COPIES::create(['book_id'=>2, 'user_id'=>2]);
        //COPIES::create(['book_id'=>3, 'user_id'=>3]);
        //COPIES::create(['book_id'=>4, 'user_id'=>4]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_o_p_i_e_s');
    }
};
