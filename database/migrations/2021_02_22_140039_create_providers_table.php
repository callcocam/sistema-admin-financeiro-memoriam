<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->enum('type', ['cpf','cnpj'])->default('cnpj');
            $table->string('name',255);
            $table->string('slug',255)->nullable();
            $table->string('email',255)->nullable()->unique();
            $table->string('phone',255)->nullable();
            $table->text('description')->nullable();
            $table->enum('status', ['draft','published'])->nullable()->default('draft');
            $table->foreignUuid('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignUuid('updated_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('providers');
    }
}
