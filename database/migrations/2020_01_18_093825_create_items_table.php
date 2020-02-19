<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_name');
            $table->string('ar_item_name');
            $table->string('price');
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->integer('available')->default(1);
            $table->text('description');
            $table->text('ar_description');
            $table->longText ('detil_description');
            $table->longText('ar_detil_description');
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
        Schema::dropIfExists('items');
    }
}
