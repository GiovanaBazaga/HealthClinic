<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained('doctors')->onDelete('cascade'); // Relacionamento com a tabela de médicos
            $table->foreignId('patient_id')->constrained('patients')->onDelete('cascade'); // Relacionamento com a tabela de pacientes
            $table->date('date'); // Data do agendamento, não pode ser nulo
            $table->time('time'); // Hora do agendamento, não pode ser nulo
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};
