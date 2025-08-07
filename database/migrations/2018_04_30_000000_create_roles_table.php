<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    const TABLE_NAME = 'roles';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(static::TABLE_NAME, function (Blueprint $table) {
            // Primary key
            $table->bigIncrements('role_id');

            // Properties
            $table->string('name')->unique();
            $table->string('description');

            // UUID
            $table->uuid('role_uuid');

            // Log
            $table->timestamp('log_ngay_tao')->comment('Thời điểm tạo')->useCurrent();
            $table->timestamp('log_ngay_capnhat')->comment('Thời điểm cập nhật')->nullable();
            $table->timestamp('log_ngay_xoa')->comment('Thời điểm xóa')->nullable();
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
        Schema::drop(static::TABLE_NAME);
    }
}
