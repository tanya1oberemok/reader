<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsersTableFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->after('email');
            $table->string('second_name')->after('email');
            $table->string('last_name')->after('email');
            $table->enum('account_type', ['teacher', 'student'])->nullable();
            $table->boolean('is_admin')->default(false);
            $table->string('avatar')->nullable();
            $table->unsignedInteger('school_id');
            $table->unsignedInteger('class_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
