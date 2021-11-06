<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('title');
            $table->float('old_price',15, 8);
            $table->float('new_price',15, 8);
            $table->text('details');
            $table->double('whatsapp');
            $table->text('instagram');
            $table->text('email');
            $table->text('notif');
            $table->text('sanp_pixel')->nullable()->default(null);
            $table->text('facebook_pixel')->nullable()->default(null);
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
