<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('cvs')) {

            Schema::create('cvs', function (Blueprint $table) {
                $table->id();
                
                
                $table->unsignedBigInteger('user_id'); 

                $table->string('name')->nullable();
                $table->text('summary')->nullable();
                $table->text('experience')->nullable();
                $table->text('education')->nullable();
                $table->text('skills')->nullable();

                $table->timestamps();

                
                $table->foreign('user_id')
                      ->references('id')
                      ->on('users')
                      ->onDelete('cascade');
            });

        }
    }

    public function down(): void
    {
        Schema::dropIfExists('cvs');
    }
};
