<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreatePatientsTable extends Migration
{
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('cpf')->unique(); // CPF do paciente, não pode ser nulo e deve ser único
            $table->string('name'); // Nome do paciente, não pode ser nulo
            $table->string('number'); // Número de contato, não pode ser nulo
            $table->string('email')->unique(); // E-mail do paciente, deve ser único e não nulo
            $table->string('address'); // Endereço do paciente, não pode ser nulo
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
