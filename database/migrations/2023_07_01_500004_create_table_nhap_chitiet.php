<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableNhapChiTiet extends Migration
{
  const TABLE_NAME = 'nhap_chitiet';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('nhap_chitiet_id');

      // Foreign
      $table->unsignedBigInteger('nhap_id');
      //$table->foreign('nhap_id')->references('nhap_id')->on('nhap');
      $table->unsignedBigInteger('dm_sanpham_id');
      //$table->foreign('dm_sanpham_id')->references('dm_sanpham_id')->on('dm_sanpham');

      // Properties
      $table->decimal('nhap_chitiet_tylethue', 18, 2);
      $table->decimal('nhap_chitiet_dongia', 18, 4);
      $table->decimal('nhap_chitiet_dongia_cothue', 18, 4);
      $table->decimal('nhap_chitiet_dongia_ban', 18, 4);
      $table->decimal('nhap_chitiet_soluong', 18, 4);
      $table->string('nhap_chitiet_solo')->nullable();
      $table->string('nhap_chitiet_chungtu')->nullable();
      $table->timestamp('nhap_chitiet_hansudung')->nullable();
      $table->mediumText('nhap_chitiet_diengiai')->nullable();
      $table->decimal('nhap_chitiet_soluong_conlai', 18, 4);
      $table->boolean('nhap_chitiet_dasudung');

      // Log
      $table->unsignedBigInteger('nhap_chitiet_old_id');
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
