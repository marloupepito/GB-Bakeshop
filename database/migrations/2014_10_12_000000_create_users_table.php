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

        Schema::create('branch', function (Blueprint $table) {
            $table->id();
            $table->string('path')->nullable()->unique();
            $table->string('title')->nullable();
            $table->string('icon')->nullable();
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
            $table->string('branch_id')->nullable();
            $table->string('request_id')->nullable();
            $table->string('ingredients_name')->nullable();
            $table->string('ingredients_quantity')->nullable();
            $table->string('ingredients_package')->nullable();
            $table->string('ingredients_status')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });


         Schema::create('production', function (Blueprint $table) {
            $table->id();
            $table->string('bread_name')->nullable();
            $table->string('price')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

          Schema::create('inventory_production', function (Blueprint $table) {
            $table->id();
            $table->string('branch_id')->nullable();
            $table->string('production_id')->nullable();
            $table->string('cashier_name')->nullable();
            $table->string('sales_clerk')->nullable();
            $table->string('trainee')->nullable();
            $table->string('bread_name')->nullable();
            $table->string('beginning_pcs')->nullable();
            $table->string('new_production_pcs')->nullable();
            $table->string('price')->nullable();
            $table->string('total')->nullable();
            $table->string('bread_out')->nullable();
            $table->string('charge_pc')->nullable();
            $table->string('remaining_pcs')->nullable();
            $table->string('sold_bread')->nullable();
            $table->string('sales')->nullable();
            $table->string('production_status')->nullable();
            $table->string('date')->nullable();
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
