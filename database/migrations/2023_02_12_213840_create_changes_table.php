<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('changes', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('fileId')->unsigned();
            $table->foreign('fileId')->references('id')->on('files');

            $table->bigInteger('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('users');

            $table->timestamp('changeTime');

            $table->integer('type')->unsigned();

            $table->text('description');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('changes');
    }
};
