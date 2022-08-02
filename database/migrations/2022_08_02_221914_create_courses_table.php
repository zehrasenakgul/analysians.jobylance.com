<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->bigInteger('category_id')->unsigned();
            $table->string('name');
            $table->text('desc');
            $table->integer('price');
            $table->string('url');
            $table->string("upload");
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('course_categories')->onDelete('cascade');
            $table->index('category_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
