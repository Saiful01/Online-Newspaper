<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExhibitionPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exhibition_posts', function (Blueprint $table) {
            $table->increments('exhibition_post_id');
            $table->string('exhibition_post_headline');
            $table->text('exhibition_post_details')->nullable();
            $table->string('exhibition_post_featured_image')->nullable();
            $table->string('exhibition_post_tags')->nullable();
            $table->unsignedInteger('exhibition_id');
            $table->unsignedInteger('author_id');
            $table->integer('publish_status')->default(1);  //Publish=1, Unpublish=0; Draft=2, Scheduled=3
            $table->integer('pin_exhibition_post')->default(0);  //Yes=1, No=0;
            $table->dateTime('schedule_exhibition_post_time')->nullable();
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
        Schema::dropIfExists('exhibition_posts');
    }
}
