<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDmXaphuong extends Migration
{
  const TABLE_NAME = 'dm_xaphuong';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dm_xaphuong_id');

      // Foreign
      $table->unsignedBigInteger('dm_quanhuyen_id');
      $table->foreign('dm_quanhuyen_id')->references('dm_quanhuyen_id')->on('dm_quanhuyen');

      // Properties
      $table->string('xaphuong_ma')->nullable();
      $table->mediumText('xaphuong_ten');
      $table->longText('xaphuong_diengiai')->nullable();
      $table->integer('xaphuong_stt')->nullable();

      // Log
      $table->unsignedBigInteger('xaphuong_old_id');
      $table->timestamp('log_ngay_tao')->comment('Thời điểm tạo')->useCurrent();
      $table->timestamp('log_ngay_capnhat')->comment('Thời điểm cập nhật')->useCurrent();
      $table->timestamp('log_ngay_xoa')->comment('Thời điểm xóa')->nullable();
      $table->unsignedBigInteger('log_nguoi_tao_id')->comment('Người tạo')->nullable();
      $table->unsignedBigInteger('log_nguoi_capnhat_id')->comment('Người cập nhật')->nullable();
      $table->unsignedBigInteger('log_nguoi_xoa_id')->comment('Người xóa')->nullable();
      $table->foreign('log_nguoi_tao_id')->references('user_id')->on('users');
      $table->foreign('log_nguoi_capnhat_id')->references('user_id')->on('users');
      $table->foreign('log_nguoi_xoa_id')->references('user_id')->on('users');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists(static::TABLE_NAME);
  }
}
