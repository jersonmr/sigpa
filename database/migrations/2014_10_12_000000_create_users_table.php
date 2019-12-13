<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('nid', 8)->unique();
            $table->string('treatment');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('charge', 100)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('photo')->nullable();
            $table->tinyInteger('user_type')
                ->comment('0 = admin, 1 = research, 2 = dept chief, 3 = director, 4 = financial admin, 5 = other');
            $table->text('observations')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
