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
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id');

            $table->string('title');
            $table->text('description');
            $table->enum('status', ['pendiente', 'en_progreso', 'completada'])->default('pendiente');

            $table->timestamps();
            $table->softDeletes();

            /*AHORA SE APLICA LAS RELACIONES FORANEAS. NOTA: Se debe especificar el nombre de la clave foránea */ 

            $table->foreign('user_id','fk_task_user')->references('id')->on('user')->onDelete('set null');
            $table->foreign('category_id', 'fk_task_category')->references('id')->on('category')->onDelete('set null');
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
