<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('updates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('post_id');
            $table->string('no');
            $table->string('tanggalMaintenance');
            $table->string('tanggalMaintenanceSelanjutnya');
            $table->string('tindakan');
            $table->string('keterangan');

            //$table->foreign('user_id')->references('id')
            //->on('users')->onDelete('cascade');
            
            $table->foreign('post_id')->references('id')
            ->on('posts')->onDelete('cascade');

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
        Schema::dropIfExists('updates');
    }
}
