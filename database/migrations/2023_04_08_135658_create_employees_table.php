<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('telephone');
            $table->string('passport_id');
            $table->string('position');
            $table->integer('salary')->nullable();

            $table->unsignedBigInteger('department_id')->nullable();
            $table->index('department_id', 'employee_department_idx');
            $table->foreign('department_id', 'employee_department_fk')->on('employees')->references('id');

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
        Schema::dropIfExists('employees');
    }
}
