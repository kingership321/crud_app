<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registeredtables', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('password');
            $table->string('confirm_password');
            $table->string('address');
            $table->string('phone');
            $table->softDeletes();
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
        Schema::dropIfExists('registeredtables');
        Schema::create('registeredtables', function (Blueprint $table) {
            $table->softDeletes();
        });
    }
};