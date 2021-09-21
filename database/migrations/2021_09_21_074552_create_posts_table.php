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
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('title');
            $table->text('content');
            $table->string('thumbnail');
            $table->string('slug')->nullable();
            $table->string('category')->default('uncategorized');
            $table->integer('status')->default(1)->comment('1: published, 0: draft');
            $table->integer('likes')->default(0);
            $table->integer('dislikes')->default(0);
            $table->integer('featured')->default(0)->comment('1: featured, 0: not featured');
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
