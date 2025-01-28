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
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->enum("status", ["selesai", "belum_selesai"]);
            $table->date("tanggal");
            $table->enum("prioritas", ["1","2","3","4"]);
            $table->unsignedBigInteger('id_list')->constrained('list')->onDelete('cascade');
            $table->timestamps();

            $table->foreign('id_list')->references('id')->on('list');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task');
    }
};
