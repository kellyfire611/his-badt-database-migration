<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDmSanphamNhom extends Migration
{
  const TABLE_NAME = 'dm_sanpham_nhom';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dm_sanpham_nhom_id');

      // Foreign
      $table->unsignedBigInteger('dm_sanpham_loai_id');
      //$table->foreign('dm_sanpham_loai_id')->references('dm_sanpham_loai_id')->on('dm_sanpham_loai');
      $table->unsignedBigInteger('dm_sanpham_nhom_cha_id')->nullable();
//      //$table->foreign('dm_sanpham_nhom_id')->references('dm_sanpham_nhom_id')->on('dm_sanpham_nhom');

      // Properties
      $table->string('sanpham_nhom_ma')->unique();
      $table->mediumText('sanpham_nhom_ten');
      $table->longText('sanpham_nhom_diengiai')->nullable();
      $table->integer('sanpham_nhom_stt')->nullable();

      // // Log
      $table->unsignedBigInteger('sanpham_nhom_old_id');
      $table->timestamp('log_ngay_tao')->comment('Thời điểm tạo')->useCurrent();
      $table->timestamp('log_ngay_capnhat')->comment('Thời điểm cập nhật')->useCurrent();
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
