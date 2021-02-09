<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->comment('物品名');
            $table->string('tepra_number', 50)->nullable()->comment('テプラナンバー');
            $table->integer('belong')->comment('私物かどうか');
            $table->string('photo_path')->nullable()->comment('写真のURL');
            $table->string('detail', 200)->comment('紹介文');
            $table->softDeletes();
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
        Schema::dropIfExists('boards');
    }
}

// かきくけこ
// じづうｆｈUEffuseE
// あっかかかっかっか
// I'm f**ker.
// I love you.
// hey x
//
// Sorry...
// 卍卍卍卍卍卍卍卍卍卍卍卍卍卍卍卍卍卍🍆🍆🍆🍆🍆🍆子茄スビ
