<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table)
        {
            $table->id('id');
            $table->unsignedBigInteger('menu_category_id')->nullable();
            $table->string('menu_name', 255);
            $table->decimal('price', 8,2);
            $table->decimal('tax', 8,2);
            $table->timestamps();

            $table->foreign('menu_category_id')->references('id')
            ->on('menu_categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
