<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKuusiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuusi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('firstname');
            $table->char('lastname');
            $table->char('address');
            $table->char('city');
            $table->char('postalcode');
            $table->char('description',155);
            $table->float('price');
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
        Schema::dropIfExists('kuusi');
    }
}
