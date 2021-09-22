<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCCatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_catalogs', function (Blueprint $table) {
            $table->id();
            $table->string('active');
            $table->string('code');
            $table->string('name');
            $table->string('category');
            $table->string('type');
            $table->string('credits');
            $table->string('periods');
            $table->string('year');
            $table->string('g_policy');
            $table->string('s_level');
            $table->mediumText('description');
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
        Schema::dropIfExists('c_catalogs');
    }
}
