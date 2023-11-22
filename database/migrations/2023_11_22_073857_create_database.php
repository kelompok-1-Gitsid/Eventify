<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('username');
            $table->text('address');
            $table->string('phone');
            $table->string('image')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignId('id_role')->constrained('roles');
            $table->timestamps();
        });

        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('username');
            $table->text('address');
            $table->string('phone');
            $table->string('image')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignId('id_category')->constrained('categories');
            $table->foreignId('id_role')->constrained('roles');
            $table->timestamps();
        });

        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->foreignId('id_role')->constrained('roles');
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->text('description');
            $table->string('image')->nullable();
            $table->foreignId('id_category')->constrained('categories');
            $table->timestamps();
        });

        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->dateTime('order_date')->nullable();
            $table->dateTime('payment_date')->nullable();
            $table->enum('status', ['paid', 'unpaid']);
            $table->string('total');
            $table->foreignId('id_customer')->constrained('customers');
            $table->foreignId('id_vendor')->constrained('vendors');
            $table->timestamps();
        });

        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->dateTime('payment_date')->nullable();
            $table->enum('status', ['success', 'failed']);
            $table->foreignId('id_transaction')->constrained('transactions');
            $table->foreignId('id_customer')->constrained('customers');
            $table->foreignId('id_product')->constrained('products');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
        Schema::dropIfExists('vendors');
        Schema::dropIfExists('admins');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('products');
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('payments');
    }
};
