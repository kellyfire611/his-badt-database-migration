<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDmChiPhiLoai extends Migration
{
  const TABLE_NAME = 'dm_chiphi_loai';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dm_chiphi_loai_id');
      
      // Properties
      $table->string('chiphi_loai_ma')->unique()->comment('Mã loại chi phí');
      $table->string('chiphi_loai_ten')->comment('Tên loại chi phí');
      $table->integer('chiphi_loai_stt')->commnent('STT')->nullable();
      $table->integer('chiphi_loai_la_phauthuat_hay_thuthuat')->comment('Là phẫu thuật hay thủ thuật?|#1: phẫu thuật; #2: thủ thuật')->nullable();

      // Log
      $table->unsignedBigInteger('chiphi_loai_old_id');
      $table->timestamp('log_ngay_tao')->comment('Thời điểm tạo')->useCurrent();
      $table->timestamp('log_ngay_capnhat')->comment('Thời điểm cập nhật')->nullable();
      $table->timestamp('log_ngay_xoa')->comment('Thời điểm xóa')->nullable();
      $table->unsignedBigInteger('log_nguoi_tao_id')->comment('Người tạo')->nullable();
      $table->unsignedBigInteger('log_nguoi_capnhat_id')->comment('Người cập nhật')->nullable();
      $table->unsignedBigInteger('log_nguoi_xoa_id')->comment('Người xóa')->nullable();
      //$table->foreign('log_nguoi_tao_id')->references('user_id')->on('users');
      //$table->foreign('log_nguoi_capnhat_id')->references('user_id')->on('users');
      //$table->foreign('log_nguoi_xoa_id')->references('user_id')->on('users');
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
