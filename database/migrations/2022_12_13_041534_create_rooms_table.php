<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->Integer('id', true);
            $table->Integer('room_id');
            $table->Integer('room_name');
            $table->Integer('room_type');
            $table->Integer('room_accommodated');
            // 論理削除を定義->deleted_atを自動生成
            $table->softDeletes();
            // timestampと書いてしまうと、レコード挿入時に更新時に値が入らないのでDB::rawで直接書いています
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
