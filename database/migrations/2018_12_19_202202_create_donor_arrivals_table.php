<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorArrivalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donor_arrivals', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('donor_id');
            $table->unsignedInteger('trans_dept_id');
            $table->timestamp('date');
            $table->string('blood_group');
            $table->string('blood_presure');
            $table->string('hemoglobin_level');
            $table->string('status');
            $table->string('note')->nullable();
            $table->foreign('donor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('trans_dept_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('donor_arrivals');
    }
}
