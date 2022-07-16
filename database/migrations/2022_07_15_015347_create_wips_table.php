<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wips', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('description');
            $table->string('unit');
            $table->float('price');
            $table->foreignId('raw_id');
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
        Schema::dropIfExists('wips');
    }
}
