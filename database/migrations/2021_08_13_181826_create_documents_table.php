<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->longText('code')->nullable();
            $table->longText('name')->nullable();
            $table->longText('level_1')->nullable();
            $table->longText('level_2')->nullable();
            $table->longText('level_3')->nullable();
            $table->longText('price')->nullable();
            $table->longText('JP_price')->nullable();
            $table->longText('qty')->nullable();
            $table->longText('properties')->nullable();
            $table->longText('joint_purchases')->nullable();
            $table->longText('UoM')->nullable();
            $table->longText('img')->nullable();
            $table->longText('brief')->nullable();
            $table->longText('description')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
