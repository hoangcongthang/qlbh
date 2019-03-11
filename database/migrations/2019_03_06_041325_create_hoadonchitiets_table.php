<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoadonchitietsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadonchitiets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('madonhang');
            $table->integer('masanpham');
            $table->integer('soluong');
            $table->float('tongtien');
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
        Schema::dropIfExists('hoadonchitiets');
    }
}
