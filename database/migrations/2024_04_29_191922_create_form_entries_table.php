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
        Schema::create('form_entries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->integer('age');
            $table->string('profile_picture')->nullable();
            $table->text('bio')->nullable();
            $table->json('interests')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->string('country');
            $table->string('phone');
            $table->string('address');
            $table->string('postal_code');
            $table->string('website')->nullable();
            $table->boolean('agree');
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
        Schema::dropIfExists('form_entries');
    }
};
