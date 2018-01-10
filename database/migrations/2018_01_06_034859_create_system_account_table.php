<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syste_account', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_id', 20);
            $table->string('account_password', 40);
            $table->string('name', 50);
            $table->char('status', 1)->default('n');
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
        Schema::dropIfExists('syste_account');
    }
}
