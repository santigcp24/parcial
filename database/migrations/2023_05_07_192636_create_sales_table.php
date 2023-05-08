<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string("nameSales");
            $table->string("nameClient");
            $table->string("nameProduct");
            $table->integer("price");
            $table->string("dateSale");
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
