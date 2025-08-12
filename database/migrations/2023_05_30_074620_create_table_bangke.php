<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableBangKe extends Migration
{
  const TABLE_NAME = 'bangke';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('bangke_id');

      // Foreign
      $table->unsignedBigInteger('benhnhan_id');
      $table->unsignedBigInteger('dotkham_id');
      $table->unsignedBigInteger('chuyenkhoa_id');
      $table->unsignedBigInteger('chuyenkhoa_phongkham_id');

      // Properties
      $table->string('bangke_sophieu')->comment('Số phiếu bảng kê');
      $table->mediumText('bangke_loai')->comment('Loại bảng kê|#trong_ngay: trong ngày; #ra_vien: ra viện');
      $table->timestamp('bangke_thoigianlap')->comment('Thời gian lập bảng kê');
      $table->mediumText('bangke_ghichu')->comment('Ghi chú bảng kê');
      $table->unsignedBigInteger('bangke_nguoilap_id')->comment('Người lập bảng kê');
      $table->unsignedBigInteger('phieuthuphi_id');
      $table->boolean('bangke_thuocvtyt_daphat')->comment('Đã phát thuốc vật tư y tế?');
      $table->boolean('bangke_hoantra_daxacnhan')->comment('Đã xác nhận hoàn trả?');
      $table->unsignedBigInteger('bangke_chidinh_bacsi_id')->comment('Bác sĩ chỉ định bảng kê');
      

      $table->unsignedBigInteger('phieutonghop_id')->comment('ID Phiếu tổng hợp');
      $table->unsignedBigInteger('bangke_chuongtrinh_hotro_id')->comment('ID Chương trình hỗ trợ');
      $table->unsignedBigInteger('xuatkho_id')->comment('ID xuất kho');

      $table->timestamp('bangke_ngay_thuchien_ylenh')->comment('Ngày thực hiện y lệnh');
      $table->string('bangke_mucdo_chidinh')->comment('Mức độ chỉ định');

      
      // Log
      $table->unsignedBigInteger('bangke_old_id');
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
