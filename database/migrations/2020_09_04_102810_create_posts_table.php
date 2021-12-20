<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('tittle');
            $table->string('img_post',250)->nullable();
            $table->text('short_content')->nullable();
            $table->text('content');
            $table->string('hot_news',50)->nullable();
           // $table->integer("slide_id")->nullable();
            $table->bigInteger("cate_id");
            $table->bigInteger("type_id");
            $table->bigInteger("user_id");
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
        Schema::dropIfExists('posts');
    }
}
