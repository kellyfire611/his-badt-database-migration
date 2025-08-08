<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDotkhamChiphi extends Migration
{
  const TABLE_NAME = 'dotkham_chiphi';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dotkham_chiphi_id');

      // Foreign
      $table->unsignedBigInteger('dotkham_id');
      $table->unsignedBigInteger('chuyenkhoa_id');
      $table->unsignedBigInteger('dm_chiphi_id');
      // //$table->foreign('dotkham_id')->references('dotkham_id')->on('dotkham');
      // //$table->foreign('chuyenkhoa_id')->references('chuyenkhoa_id')->on('dotkham_chuyenkhoa');
      // //$table->foreign('dm_chiphi_id')->references('dm_chiphi_id')->on('dm_chiphi');

      // Properties
      $table->string('donvitinh');
      $table->decimal('soluong');
      $table->decimal('dongia_bv');
      $table->decimal('dongia_bh');
      $table->decimal('tyle_thanhtoan_bv');
      $table->decimal('thanhtien_bv');
      $table->decimal('tyle_thanhtoan_bh');
      $table->decimal('thanhtien_bh');
      $table->decimal('nguonthanhtoan_quy_bhxh');
      $table->decimal('nguonthanhtoan_nguoibenh_cungchitra');
      $table->decimal('nguonthanhtoan_khac');
      $table->decimal('nguonthanhtoan_nguoibenh_tutra');
      $table->boolean('tinhphi');

      // Log
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
