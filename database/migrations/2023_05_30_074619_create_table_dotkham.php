<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDotkham extends Migration
{
  const TABLE_NAME = 'dotkham';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dotkham_id');

      // Foreign
      $table->unsignedBigInteger('benhnhan_id');
      $table->unsignedBigInteger('giayto_id');
      $table->unsignedBigInteger('nguoitiepnhan_id');

      // Properties
      $table->string('dotkham_ma');
      $table->string('dotkham_trangthai_e', 250)->comment('Trạng thái của đợt khám: #dangcho: Đang chờ; #danggia: Đang giải quyết; #hoanthanh: Hoàn thành; #huy: Hủy bỏ');
      $table->string('dotkham_hinhthuc_dieutri_e', 250)->comment('Hình thức điều trị: #kham: Khám; #dieutri: Điều trị; #khambenh: Khám bệnh; #khambenh_dangky: Khám bệnh đăng ký; #khambenh_dangky_kham: Khám bệnh đăng ký khám');
      $table->boolean('dotkham_latraituyen')->comment('Là trái tuyến?');
      $table->timestamp('dotkham_ngayravien')->comment('Ngày ra viện?');
      $table->decimal('dotkham_phantramcungchitra', 20, 2)->comment('Phần trăm cùng chi trả bảo hiểm y tế');
      $table->integer('dotkham_dieutri_doituong')->comment('Đối tượng điều trị|#1: Thu phí; #2: Bảo hiểm y tế; #3: Khác');
      $table->integer('dotkham_dieutri_tongsongay')->comment('Tổng số ngày điều trị');
      $table->mediumText('dotkham_dieutri_tomtat_ketqua_benhan')->comment('Tóm tắt kết quả bệnh án');
      $table->mediumText('dotkham_dieutri_quatrinh_benhly')->comment('Quá trình bệnh lý');
      $table->mediumText('dotkham_dieutri_tiensubenh')->comment('Tiền sử bệnh');
      $table->integer('dotkham_dieutri_taibien_e')->comment('Tai biến|#1: Do phẫu thuật; #2: Do gây mê; #3: Do nhiễm khuẩn; #4: khác');
      $table->mediumText('dotkham_ghichu')->comment('Ghi chú đợt khám');
      $table->decimal('dotkham_bhyt_luongcanban', 20, 2)->comment('Lương căn bản');
      $table->decimal('dotkham_bhyt_solanluongtoithieu', 20, 2)->comment('Số lần lương tối thiểu BHYT');
      $table->decimal('dotkham_bhyt_muctranluongtoithieu', 20, 2)->comment('Mức trần lương tối thiểu BHYT');
      $table->decimal('dotkham_bhyt_phantramtraituyen', 20, 2)->comment('% trái tuyến BHYT');
      $table->string('dotkham_bhyt_stt', 250)->comment('STT BHYT');
      $table->string('dotkham_sobenhan', 250)->comment('Số bệnh án');

      $table->integer('dotkham_giamdinh_bhyt_trangthai_e')->comment('Trạng thái gởi giám định BHYT|#1: Chưa gởi giám định; #2: Đã gởi giám định');

      $table->timestamp('dotkham_ngayhenkhamlai', 250)->comment('Ngày hẹn khám lại');
      $table->timestamp('dotkham_ngaymiencungchitra')->comment('Ngày miễn cùng chi trả');
      
      // Log
      $table->unsignedBigInteger('dotkham_old_id');
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
