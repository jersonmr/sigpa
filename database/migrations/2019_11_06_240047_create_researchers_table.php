<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('researchers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('lab_id');
            $table->unsignedBigInteger('user_id');
            $table->enum('type', [
                'De Planta',
                'Asociado',
                'Colaborador'
            ]);
            $table->enum('role', [
                'Coordinador',
                'Investigador'
            ]);
            $table->tinyInteger('pei');
            $table->string('university', 100)->nullable();
            $table->year('graduation_year')->nullable();
            $table->string('speciality')->nullable();
            $table->string('research_lane')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('department_id')
                ->references('id')
                ->on('departments');

            $table->foreign('lab_id')
                ->references('id')
                ->on('labs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
