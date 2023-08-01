<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;// ← 追記 *

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 8)->comment('ロール名');  // ← 追記 *********
            $table->string('memo')->comment('備考');  // ← 追記 *********
            $table->timestamps();
        });
        DB::table('roles')->insert(['id'=>1,'name'=>'sv','memo'=>'スーパーバイザー']);// ← 追記 *********
        DB::table('roles')->insert(['id'=>2,'name'=>'clerk','memo'=>'店員']);// ← 追記 *********
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
