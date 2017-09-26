<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksUploadedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_uploaded', function (Blueprint $table) {
            $table->integer('uploader_UID');
            $table->string('book_name');
            $table->string('book_author');
            $table->string('book_edition');
            $table->string('subject');
            $table->string('year');
            $table->string('branch');
            $table->float('price');
            $table->string('uploadimage')->nullable();
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
        Schema::dropIfExists('books_uploaded');
    }
}
