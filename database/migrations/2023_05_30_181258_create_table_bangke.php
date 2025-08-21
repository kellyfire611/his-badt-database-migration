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
      $table->unsignedBigInteger('dotkham_chuyenkhoa_id');
      $table->unsignedBigInteger('dotkham_chuyenkhoa_phongkham_id');

      // Properties
      $table->string('bangke_sophieu')->nullable()->comment('Số phiếu bảng kê');
      $table->mediumText('bangke_loai')->nullable()->comment('Loại bảng kê|#trong_ngay: trong ngày; #ra_vien: ra viện');
      $table->timestamp('bangke_thoigianlap')->nullable()->comment('Thời gian lập bảng kê');
      $table->mediumText('bangke_ghichu')->nullable()->comment('Ghi chú bảng kê');
      $table->unsignedBigInteger('bangke_nguoilap_id')->nullable()->comment('Người lập bảng kê');
      $table->unsignedBigInteger('phieuthuphi_id')->nullable();
      $table->boolean('bangke_thuocvtyt_daphat')->nullable()->comment('Đã phát thuốc vật tư y tế?');
      $table->boolean('bangke_hoantra_daxacnhan')->nullable()->comment('Đã xác nhận hoàn trả?');
      $table->unsignedBigInteger('bangke_chidinh_bacsi_id')->nullable()->comment('Bác sĩ chỉ định bảng kê');
      

      $table->unsignedBigInteger('phieutonghop_id')->nullable()->comment('ID Phiếu tổng hợp');
      $table->unsignedBigInteger('bangke_chuongtrinh_hotro_id')->nullable()->comment('ID Chương trình hỗ trợ');
      $table->unsignedBigInteger('xuatkho_id')->nullable()->comment('ID xuất kho');

      $table->timestamp('bangke_ngay_thuchien_ylenh')->nullable()->comment('Ngày thực hiện y lệnh');
      $table->string('bangke_mucdo_chidinh')->nullable()->comment('Mức độ chỉ định');

      
      // Log
      $table->unsignedBigInteger('bangke_old_id');
      $table->unsignedBigInteger('chidinh_old_id');
      $table->unsignedBigInteger('donthuoc_old_id');
      
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
