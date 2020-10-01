<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('post_id');
            $table->string('post_headline');
            $table->string('post_slug')->nullable();
            $table->text('post_details');
            $table->string('post_featured_image')->nullable();
            $table->string('post_tags')->nullable();
            $table->string('category_id')->nullable();
            $table->unsignedInteger('author_id');
            $table->integer('publish_status')->default(1);  //Publish=1, Unpublish=0; Draft=2, Scheduled=3
            $table->integer('pin_post')->default(0);  //Yes=1, No=0;
            $table->integer('featured_image_post')->default(0);  //Yes=1, No=0;
            $table->dateTime('schedule_post_time')->nullable();
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
