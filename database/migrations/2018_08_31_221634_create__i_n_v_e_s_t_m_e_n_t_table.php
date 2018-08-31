<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateINVESTMENTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investment', function (Blueprint $table) {
            $table->increments('id');
            $table->float('amount', 8, 2);
            $table->dateTime('acquisition_date');
            $table->date('due_date');
            $table->boolean('fixed');
            $table->float('tax', 5, 2);

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedInteger('investment_type_id');
            $table->foreign('investment_type_id')->references('id')->on('investment_type');

            $table->unsignedInteger('bank_id');
            $table->foreign('bank_id')->references('id')->on('bank');

            $table->unsignedInteger('broker_id');
            $table->foreign('broker_id')->references('id')->on('broker');

            $table->smallInteger('status');

            $table->text('observation');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investment');
    }
}
