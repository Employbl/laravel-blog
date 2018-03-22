<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('media');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->increments('id');

            $table->string('filename');
            $table->string('original_filename');
            $table->string('mime_type');
            $table->nullableMorphs('mediable');

            $table->timestamps();
        });
    }
}
