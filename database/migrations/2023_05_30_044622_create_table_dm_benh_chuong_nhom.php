<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDmBenhChuongNhom extends Migration
{
  const TABLE_NAME = 'dm_benh_chuong_nhom';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dm_benh_chuong_nhom_id');

      // Foreign
      $table->unsignedBigInteger('dm_benh_chuong_id');
      //$table->foreign('dm_benh_chuong_id')->references('dm_benh_chuong_id')->on('dm_benh_chuong');
      
      // Properties
      $table->string('benh_chuong_nhom_ma')->unique();
      $table->mediumText('benh_chuong_nhom_ten');
      $table->mediumText('benh_chuong_nhom_ten_en')->nullable();
      $table->mediumText('benh_chuong_nhom_doan_mabenh_icd10')->nullable();
      $table->longText('benh_chuong_nhom_diengiai')->nullable();
      $table->integer('benh_chuong_nhom_stt')->nullable();

      // Log
      $table->unsignedBigInteger('benh_chuong_nhom_old_id');
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
