<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprentice_briefs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('apprentice_id')->unsigned();
            $table->bigInteger('brief_id')->unsigned();
            $table->foreign('apprentice_id')->references('id')->on('apprentices')->onDelete('cascade');
            $table->foreign('brief_id')->references('id')->on('briefs')->onDelete('cascade');
            $table->date('dateAssignment');
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
        Schema::dropIfExists('apprentice_briefs');
    }
};
