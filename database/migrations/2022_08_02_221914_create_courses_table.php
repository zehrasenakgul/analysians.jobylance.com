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
            $table->string('CourseTitle_Input');
            $table->text('Course_Description');
            $table->integer('price');
            $table->boolean('tag');
            $table->string('url');
            $table->string("Course_Intro_Video_upload");
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
