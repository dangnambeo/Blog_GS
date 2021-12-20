<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypecateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typecate', function (Blueprint $table) {
            $table->bigIncrements('type_id');
            $table->string('type_tittle',150);
            $table->string('ordinal_type',50)->nullable();
            $table->bigInteger('cate_id')->nullable();
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
        Schema::dropIfExists('typecate');
    }
}
