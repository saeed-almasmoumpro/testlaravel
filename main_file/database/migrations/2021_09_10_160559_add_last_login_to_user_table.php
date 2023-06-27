<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLastLoginToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'users', function (Blueprint $table){
            $table->datetime('last_login_at')->nullable()->after('remember_token');
        }
        );
        Schema::table(
            'customers', function (Blueprint $table){
            $table->datetime('last_login_at')->nullable()->after('remember_token');
        }
        );
        Schema::table(
            'venders', function (Blueprint $table){
            $table->datetime('last_login_at')->nullable()->after('remember_token');
        }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(
            'users', function (Blueprint $table){
            $table->dropColumn('last_login_at');
        }
        );
        Schema::table(
            'customers', function (Blueprint $table){
            $table->dropColumn('last_login_at');
        }
        );
        Schema::table(
            'venders', function (Blueprint $table){
            $table->dropColumn('last_login_at');
        }
        );
    }
}
