<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableNhapTuNguon extends Migration
{
  const TABLE_NAME = 'nhap_tu_nguon';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('nhap_tu_nguon_id');

      // Foreign
      $table->unsignedBigInteger('nhap_id');
      //$table->foreign('nhap_id')->references('nhap_id')->on('nhap');
      $table->unsignedBigInteger('dm_nhacungcap_id')->nullable();
      //$table->foreign('dm_nhacungcap_id')->references('dm_nhacungcap_id')->on('dm_nhacungcap');
      $table->unsignedBigInteger('dm_nhasanxuat_id')->nullable();
      //$table->foreign('dm_nhasanxuat_id')->references('dm_nhasanxuat_id')->on('dm_nhasanxuat');
      $table->unsignedBigInteger('dm_nguoncungcap_id')->nullable();
      //$table->foreign('dm_nguoncungcap_id')->references('dm_nguoncungcap_id')->on('dm_nguoncungcap');
      $table->unsignedBigInteger('dm_chuongtrinhcungcap_id')->nullable();
      //$table->foreign('dm_chuongtrinhcungcap_id')->references('dm_chuongtrinhcungcap_id')->on('dm_chuongtrinhcungcap');

      // Properties
      $table->string('nhap_tu_nguon_ten');
      $table->string('nhap_tu_nguon_diengiai');

      // Log
      $table->timestamp('log_ngay_tao')->comment('Thời điểm tạo')->useCurrent();
      $table->timestamp('log_ngay_capnhat')->comment('Thời điểm cập nhật')->nullable();
      $table->timestamp('log_ngay_xoa')->comment('Thời điểm xóa')->nullable();
      $table->unsignedBigInteger('log_nguoi_tao_id')->comment('Người tạo')->nullable();
      $table->unsignedBigInteger('log_nguoi_capnhat_id')->comment('Người cập nhật')->nullable();
      $table->unsignedBigInteger('log_nguoi_xoa_id')->comment('Người xóa')->nullable();
      //$table->foreign('log_nguoi_tao_id')->references('user_id')->on('users');
      //$table->foreign('log_nguoi_capnhat_id')->references('user_id')->on('users');
      //$table->foreign('log_nguoi_xoa_id')->references('user_id')->on('users');
      $table->uuid('guid')->default(DB::raw('gen_random_uuid()'));
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
