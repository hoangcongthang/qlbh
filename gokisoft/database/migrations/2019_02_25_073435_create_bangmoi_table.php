<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBangmoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangmoi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenchungcu', 200);
            $table->string('diachi', 200);
            $table->string('thongtinchung', 200);
            $table->text('thongtinchitiet');
            $table->string('hinhanhdaidien', 20);
            $table->string('trangthai', 6);
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
        Schema::dropIfExists('bangmoi');
    }
}
