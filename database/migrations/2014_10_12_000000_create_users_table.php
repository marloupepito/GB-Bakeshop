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
            $table->id();
            $table->string('branch_name')->nullable()->unique();
            $table->string('branch_assigned_person')->nullable();
            $table->string('branch_position')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('status')->nullable();
            $table->string('year')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->string('ingredients_name')->nullable();
            $table->string('ingredients_quantity')->nullable();
            $table->string('ingredients_quantity_description')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

         Schema::create('ingredients_request', function (Blueprint $table) {
            $table->id();
            $table->string('branch_id');
            $table->string('request_id');
            $table->string('ingredients_name')->nullable();
            $table->string('ingredients_quantity')->nullable();
            $table->string('ingredients_package')->nullable();
            $table->string('ingredients_status')->nullable();
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
