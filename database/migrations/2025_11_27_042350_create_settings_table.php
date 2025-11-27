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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->decimal('daily_price', 10)->default(500)->comment('Preço padrão por diária');
            $table->decimal('multi_day_discount', 10)->default(100)->comment('Desconto por múltiplos dias');
            $table->string('space_name', 255)->default('Recanto do Vô Pedro')->comment('Nome do espaço');
            $table->string('address', 500)->comment('Endereço completo do espaço');
            $table->string('phone', 50)->comment('Telefone de contato');
            $table->string('whatsapp', 50)->comment('Contato de whatsapp');
            $table->string('checkin_time', 10)->default('08:00')->comment('Horário padrão de check-in (entrada)');
            $table->string('checkout_time', 10)->default('22:00')->comment('Horário padrão de check-out (saída)');
            $table->integer('max_capacity')->default(200)->comment('Capacidade máxima de pessoas');
            $table->longText('rules')->nullable()->comment('Regras gerais de uso do espaço');
            $table->longText('description')->comment('Descrição geral do espaço');
            $table->json('amenities')->nullable()->comment('Lista de comodidades disponíveis (JSON)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
