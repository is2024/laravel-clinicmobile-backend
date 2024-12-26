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
        Schema::table('users', function (Blueprint $table) {
            //role [admin,doctor,patient]
            $table->string('role')->default('patient');
            //google_id
            $table->string('google_id')->nullable();
            //ktp_number
            $table->string('ktp_number')->nullable();
            //birth_date
            $table->date('birth_date')->nullable();
            //gender
            $table->string('gender')->nullable();
            //phone_number
            $table->string('phone_number')->nullable();
            //address
            $table->text('address')->nullable();
            //certification
            $table->string('certification')->nullable();
            //telemedicine_fee
            $table->integer('telemedicine_fee')->nullable();
            //chat_fee
            $table->integer('chat_fee')->nullable();
            //start_time
            $table->time('start_time')->nullable();
            //end_time
            $table->time('end_time')->nullable();
            //clinic_id
            $table->foreignId('clinic_id')->nullable()->constrained('clinics')->onDelete('set null');
            //image
            $table->string('image')->nullable();
            //specialist_id
            $table->foreignId('specialist_id')->nullable()->constrained('specialists')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
