<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comment_id');
            $table->unsignedBigInteger('tag_id');

            $table->index('comment_id', "comment_tag_comment_idx");
            $table->index('tag_id', "comment_tag_tag_idx");

            $table->foreign('comment_id', 'comment_tag_comment_fk')->on('comments')->references('id');
            $table->foreign('tag_id', 'comment_tag_tag_fk')->on('tags')->references('id');

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
        Schema::dropIfExists('comment_tags');
    }
}
