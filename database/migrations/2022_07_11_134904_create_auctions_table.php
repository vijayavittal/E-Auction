<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
           
        
            $table->id();
            $table->string('name');
            $table->string('min_amount');
            $table->text('description');
            $table->integer('assest_id');
            $table->integer('emt_amount');
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->integer('auction_status_id');
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
        Schema::dropIfExists('auctions');
    }
}
