<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {           
            $table->uuid('id')->primary();
            $table->enum('type', ['cpf','cnpj'])->default('cpf');
            $table->string('name',255);
            $table->string('slug',255);
            $table->string('email',255);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',255); 
            $table->enum('status', ['deleted','draft','published'])->default('published');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
