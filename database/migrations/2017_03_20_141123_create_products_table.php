<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id')->index();

            $table->string('nama');
            $table->string('slug')->unique()->index();
            $table->enum('kondisi', ['baru', 'bekas'])->default('baru');
            $table->integer('berat')->unsigned()->default(00);
            $table->integer('stok')->unsigned()->default(00);
            $table->decimal('harga_satuan', 60, 2)->default(0);
            $table->text('deskripsi')->nullable();

            $table->text('label')->nullable();
            $table->text('tag')->nullable();
            $table->text('pengiriman')->nullable();
            $table->text('gratis_kirim')->nullable();
            $table->enum('asuransi', ['ya', 'tidak'])->default('ya');
            $table->enum('status', ['publish', 'draft'])->default('draft');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
