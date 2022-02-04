<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allproducts', function (Blueprint $table) {
            $table->id();
            $table->string('allproduct_image');
            $table->string('allproduct_name');
            $table->string('allproduct_newprice');
            $table->string('allproduct_oldprice');
            $table->string('allproduct_seemore');
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
        Schema::dropIfExists('allproducts');
    }
}
