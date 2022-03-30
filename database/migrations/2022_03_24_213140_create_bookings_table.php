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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->datetime('start');
            $table->datetime('end');
            $table->integer('adult');
            $table->integer('children');
            // $table->boolean('valide');
            $table->string("comment")->nullable();
            $table->string("phone")->nullable();
            $table->string("country")->nullable();
            $table->foreignId('categorie_id')->nullable()->constrained();
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
        Schema::dropIfExists('bookings');
    }
};
