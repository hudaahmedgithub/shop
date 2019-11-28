<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->float('price');
			$table->float('old_price');
			$table->string('image')->default('default.jpg');
			$table->string('precent');
			$table->integer('qty');
			$table->integer('stock');
			$table->integer('category_id')->unsigned();
			
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
        Schema::dropIfExists('products');
    }
}
