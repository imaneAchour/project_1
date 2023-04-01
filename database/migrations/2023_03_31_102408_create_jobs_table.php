<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_company')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');
            $table->string('poste');
            $table->string('salary');
            $table->string('city');
            $table->string('status');
            $table->integer('nbr_poste');
            $table->string('address');
            $table->string('requirement');
            $table->string('description')->nullable();
            $table->date('date_limit')->nullable();
            $table->string('date_entretien')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
