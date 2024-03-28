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
        Schema::create('admission_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('date_of_birth');
            $table->string('school');
            $table->string('class');
            $table->string('mother_name');
            $table->integer('mother_number');
            $table->string('father_name');
            $table->integer('father_number');
            $table->string('guardian');
            $table->integer('guardian_number');
            $table->string('divisions');
            $table->string('distric');
            $table->string('polic_sta');
            $table->string('road_house');
            $table->string('email');
            $table->string('course');
            $table->string('reference');
            $table->string('reference_number');
            $table->string('hobby');
            $table->string('image');
            $table->string('checkbox');
            $table->date('date');
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
        Schema::dropIfExists('admission-forms');
    }
};
