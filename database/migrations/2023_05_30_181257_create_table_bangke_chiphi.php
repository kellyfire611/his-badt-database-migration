<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableBangkeChiphi extends Migration
{
  const TABLE_NAME = 'bangke_chiphi';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('bangke_chiphi_id');

      // Foreign
      $table->unsignedBigInteger('bangke_id');
      $table->unsignedBigInteger('chuyenkhoa_id');
      $table->unsignedBigInteger('dm_chiphi_id');
      // //$table->foreign('bangke_id')->references('bangke_id')->on('bangke');
      // //$table->foreign('chuyenkhoa_id')->references('chuyenkhoa_id')->on('bangke_chuyenkhoa');
      // //$table->foreign('dm_chiphi_id')->references('dm_chiphi_id')->on('dm_chiphi');

      // Properties
      $table->string('bangke_chiphi_sophieu')->comment('Số phiếu bảng kê chi phí');
      $table->integer('cls_loai_e')->comment('Loại cận lâm sàng|#1');

      $table->string('donvitinh');
      $table->decimal('soluong');
      $table->decimal('thuphi_dongia');
      $table->decimal('baohiem_dongia');
      $table->decimal('baohiem_dongia_thanhtoan');

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
