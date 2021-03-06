<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteCardImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_card_image', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('site_id');
            $table->bigInteger('card_id');
            $table->string('image');
            $table->string('item_image');
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
        Schema::dropIfExists('site_card_image');
    }
}
