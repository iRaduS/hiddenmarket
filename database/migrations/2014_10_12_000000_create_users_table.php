<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('username') -> unique();
            $table->string('password');
            $table->string('pin');
            $table->string('session_id')->nullable();
            $table->text('mnemonic');
            $table -> text('payment_address') -> nullable();
            $table->timestamp('last_seen')->nullable();
            $table->boolean('login_2fa')->default(false);
            $table->text('pgp_key')->nullable();
            $table->longText('msg_public_key')->nullable();
            $table->longText('msg_private_key')->nullable();
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
        Schema::dropIfExists('users');
    }
}
