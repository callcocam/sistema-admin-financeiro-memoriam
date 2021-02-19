<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCredentialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credentials', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name',255);
            $table->string('slug',255);
            $table->string('endpoint',255);
            $table->string('grant_type', 100)->nullable()->default('client_credentials');
            $table->string('client_id', 255)->nullable();
            $table->string('client_secret', 255)->nullable();
            $table->string('scope', 255)->nullable();
            $table->string('redirect', 255)->nullable();
            $table->string('token')->nullable();
            $table->text('access_token')->nullable();
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
        Schema::dropIfExists('credentials');
    }
}
