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
      $table->integer('canlamsang_loai_e')->comment('Loại cận lâm sàng|#1');
      $table->string('canlamsang_sophieu')->comment('Số phiếu cận lâm sàng');

      $table->decimal('soluong');
      $table->decimal('thuphi_dongia');

      $table->decimal('baohiem_dongia');
      $table->decimal('baohiem_dongia_thanhtoan');
      $table->decimal('baohiem_tyle_thanhtoan');

      $table->decimal('nguonthanhtoan_quy_bhxh');
      $table->decimal('nguonthanhtoan_nguoibenh_cungchitra');
      $table->decimal('nguonthanhtoan_khac');
      $table->decimal('nguonthanhtoan_nguoibenh_tutra');
      $table->boolean('tinhphi');

      $table->boolean('la_pttt')->comment('Là phẫu thuật thủ thuật?');
      $table->boolean('la_cls')->comment('Là phẫu thuật thủ thuật?');
      
      $table->string('donvitinh')->comment('Đơn vị tính');
      $table->mediumText('chiphi_ten')->comment('Tên chi phí');
      $table->mediumText('ghichu')->comment('Ghi chú');


      $table->unsignedBigInteger('phieuthuphi_id');
      $table->unsignedBigInteger('canlamsang_chucnang_loai_id')->comment('Loại chức năng cận lâm sàng');
      $table->unsignedBigInteger('canlamsang_chucnang_nhom_id')->comment('Nhóm chức năng cận lâm sàng');

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
