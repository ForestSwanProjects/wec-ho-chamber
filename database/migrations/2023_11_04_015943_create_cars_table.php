<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('make');
            $table->string('model');
            $table->string('class');
            $table->bigInteger('team_id')->unsigned();
            $table->bigInteger('race_id')->unsigned();
            $table->timestamps();

            //telling db team_id is foreign key and which col. and table its from
            $table->foreign('team_id')->references('id')->on('teams')
                ->onDelete('cascade')->onUpdate('cascade');

            //telling db race_id is foreign key and which col. and table its from
            $table->foreign('race_id')->references('id')->on('team')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
