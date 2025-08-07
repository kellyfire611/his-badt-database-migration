<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDotkhamChuyenkhoa extends Migration
{
  const TABLE_NAME = 'dotkham_chuyenkhoa';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('chuyenkhoa_id');

      // Properties
      $table->string('chuyenkhoa_ma')->unique();
      $table->string('dm_donvi_cap1')->comment('Đơn vị cấp 1 là: Khoa');
      $table->string('dm_donvi_cap2')->comment('Đơn vị cấp 2 là: Phòng');
      
      // Log
      $table->unsignedBigInteger('chuyenkhoa_old_id');
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
