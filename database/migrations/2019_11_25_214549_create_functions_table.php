<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunctionsTable extends Migration
{
    /**
     * Run the migrations.
     * id, question, coef_a, coef_b, coef_c, delta, x1, x2.
     * @return void
     */
    public function up()
    {
        Schema::create('functions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('question');
            $table->double('coef_a');
            $table->double('coef_b');
            $table->double('coef_c');
            $table->double('delta');
            $table->double('x1');
            $table->double('x2');
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
        Schema::dropIfExists('functions');
    }
}
