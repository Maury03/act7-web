<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('courseName');

            $table->unsignedBigInteger('kitKey');
            $table->foreign('kitKey')
            ->references('id')
            ->on('kits')
            ->onDelete('cascade');

            $table->unsignedBigInteger('groupKey')->nullable();
            $table->foreign('groupKey')
            ->references('id')
            ->on('grupos')
            ->onDelete('cascade');

            $table->string('created_at');
            $table->string('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
