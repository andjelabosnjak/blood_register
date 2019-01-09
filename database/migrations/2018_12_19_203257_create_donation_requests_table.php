<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('donor_id');
            $table->unsignedInteger('trans_dept_id');
            $table->datetime('wanted_date');
            $table->integer('approved')->nullable();
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
        Schema::dropIfExists('donation_requests');
    }
}
