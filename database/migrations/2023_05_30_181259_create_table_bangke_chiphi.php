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
      $table->unsignedBigInteger('benhnhan_id');
      $table->unsignedBigInteger('dotkham_id');
      $table->unsignedBigInteger('dotkham_chuyenkhoa_id');
      $table->unsignedBigInteger('dotkham_chuyenkhoa_phongkham_id');
      
      $table->unsignedBigInteger('bangke_id');
      $table->unsignedBigInteger('dm_chiphi_id')->nullable();
      $table->unsignedBigInteger('benhnhan_giayto_id')->nullable();
      // //$table->foreign('bangke_id')->references('bangke_id')->on('bangke');
      // //$table->foreign('chuyenkhoa_id')->references('chuyenkhoa_id')->on('bangke_chuyenkhoa');
      // //$table->foreign('dm_chiphi_id')->references('dm_chiphi_id')->on('dm_chiphi');

      // Properties
      $table->string('bangke_chiphi_sophieu')->nullable()->comment('Số phiếu bảng kê chi phí');
      $table->integer('bangke_chiphi_cls_loai_e')->nullable()->comment('Loại cận lâm sàng|#1');
      $table->decimal('bangke_chiphi_soluong')->nullable();
      $table->decimal('bangke_chiphi_thuphi_dongia')->nullable();

      $table->decimal('bangke_chiphi_baohiem_dongia')->nullable();
      $table->decimal('bangke_chiphi_baohiem_dongia_thanhtoan')->nullable();
      $table->decimal('bangke_chiphi_baohiem_tyle_thanhtoan')->nullable();

      $table->decimal('bangke_chiphi_nguonthanhtoan_quy_bhxh')->nullable();
      $table->decimal('bangke_chiphi_nguonthanhtoan_nguoibenh_cungchitra')->nullable();
      $table->decimal('bangke_chiphi_nguonthanhtoan_khac')->nullable();
      $table->decimal('bangke_chiphi_nguonthanhtoan_nguoibenh_tutra')->nullable();
      $table->boolean('bangke_chiphi_tinhphi')->nullable();

      $table->boolean('bangke_chiphi_la_pttt')->nullable()->comment('Là phẫu thuật thủ thuật?');
      $table->boolean('bangke_chiphi_la_cls')->nullable()->comment('Là phẫu thuật thủ thuật?');
      
      $table->string('bangke_chiphi_donvitinh')->nullable()->comment('Đơn vị tính');
      $table->mediumText('bangke_chiphi_ten')->nullable()->comment('Tên chi phí');
      $table->mediumText('bangke_chiphi_ghichu')->nullable()->comment('Ghi chú');


      $table->unsignedBigInteger('phieuthuphi_id')->nullable();
      $table->unsignedBigInteger('cls_chucnang_loai_id')->nullable()->comment('Loại chức năng cận lâm sàng');
      $table->unsignedBigInteger('cls_chucnang_nhom_id')->nullable()->comment('Nhóm chức năng cận lâm sàng');

      // Log
      $table->unsignedBigInteger('bangke_chiphi_old_id');
      $table->unsignedBigInteger('chidinh_chitiet_old_id');

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
