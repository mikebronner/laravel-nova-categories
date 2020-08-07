<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorizablesTable extends Migration
{
    public function up()
    {
        Schema::create('categorizables', function (Blueprint $table) {
            $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("categorizable_id");
            $table->text("categorizable_type");
        });
    }

    public function down()
    {
        Schema::dropIfExists('categorizables');
    }
}
