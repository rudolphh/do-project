<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->enum('gender', ['male', 'female'])->default('male');
            $table->decimal('height', 5, 2)->nullable();
            $table->enum('system', ['imperial', 'metric'])->default('imperial');

            $table->enum('goal', ['lose_fat','maintain','gain_muscle'])->default('maintain');

            // activity_level determines the multiplier custom_multipller 
            $table->enum('act_level', ['0','1','2','3','4'])->default('0');
            // users can save their own based on their own metabolism
            $table->decimal('custom_mult', 3, 2)->default('1.45');

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
        Schema::drop('users');
    }
}
