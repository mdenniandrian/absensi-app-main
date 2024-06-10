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
        Schema::create('r_problems', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('problems');
            $table->string('cause');
            $table->string('solved');
            $table->string('loc_jobs');
            $table->string('status');
            $table->string('pic');
            $table->date('date');
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
        Schema::dropIfExists('r_problems');
    }
};
