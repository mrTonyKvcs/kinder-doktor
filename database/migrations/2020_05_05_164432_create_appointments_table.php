<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_number');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('birthday');
            $table->string('social_security_number');
            $table->string('email');
            $table->string('phone_number');
            $table->integer('piece');
            $table->string('pay_method');
            $table->string('city')->nullable()->default(null);
            $table->string('zip_code')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->boolean('is_nurse');
            $table->integer('total');
            $table->boolean('gdpr');
            $table->boolean('statement');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
