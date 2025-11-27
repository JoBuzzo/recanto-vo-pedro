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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('client_name', 255)->comment('Nome do cliente');
            $table->string('client_phone', 20)->comment('Telefone do cliente');
            $table->string('client_email', 255)->nullable()->comment('Email do cliente');
            $table->date('start_date')->comment('Data inicial da reserva');
            $table->date('end_date')->comment('Data final da reserva');
            $table->integer('total_days')->comment('Quantidade total de dias reservados');
            $table->decimal('total_price', 10)->comment('Preço total calculado');
            $table->text('notes')->nullable()->comment('Observações adicionais da reserva');
            $table->string('status', 45)->default('pending')->comment('Status da reserva');
            $table->string('payment_method', 45)->default('pending')->comment('Método de pagamento: pending, deposit_only, full_upfront, deposit_and_rest');
            $table->boolean('deposit_paid')->default(false)->comment('Indica se a primeira parte da reserva foi paga');
            $table->decimal('deposit_amount', 10)->nullable()->comment('Valor do sinal pago');
            $table->dateTime('deposit_paid_at')->nullable()->comment('Data do pagamento');
            $table->boolean('full_paid')->default(false)->comment('Indica se o pagamento total foi realizado');
            $table->dateTime('full_paid_at')->nullable()->comment('Data em que o valor total foi pago');
            $table->string('created_by')->default('client')->comment('Origem da criação da reserva (cliente, nome do funcionário)');
            $table->timestamps();

            $table->index(['start_date', 'end_date'], 'idx_reservations_dates');
            $table->index(['status'], 'idx_reservations_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
