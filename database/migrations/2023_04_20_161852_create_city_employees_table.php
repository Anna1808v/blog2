<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_employees', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('city_id');

            $table->index('employee_id', 'employee_city_employee_idx');
            $table->index('city_id', 'employee_city_city_idx');

            $table->foreign('employee_id', 'employee_city_employee_fk')->on('employees')->references('id');
            $table->foreign('city_id', 'employee_city_city_fk')->on('cities')->references('id');

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
        Schema::dropIfExists('city_employees');
    }
}
