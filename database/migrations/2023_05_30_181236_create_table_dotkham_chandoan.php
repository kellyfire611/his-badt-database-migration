<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDotkhamChandoan extends Migration
{
  const TABLE_NAME = 'dotkham_chandoan';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dotkham_chandoan_id');

      // Foreign
      $table->unsignedBigInteger('benhnhan_id');
      $table->unsignedBigInteger('dotkham_id');
      $table->unsignedBigInteger('chuyenkhoa_id');

      // Properties
      $table->string('chandoan_hinhthuc')->comment('Hình thức nhập chẩn đoán|#vaovien: vào viện; #ravien: ra viện; #noichuyenden: nơi chuyển đến; #vaokhoa: vào khoa; #rakhoa: ra khoa; #tuvong: tử vong; #khamnghiem: khám nghiệm; #vaophong_kham: vào phòng khám; #sinhcon: sinh con');
      $table->string('chandoan_noinhap')->comment('Nơi nhập chẩn đoán|#benhvien: benhvien; ');
      $table->string('chandoan_loai')->comment('Loại chẩn đoán|#chinh: chẩn đoán chính; #phu: chẩn đoán phụ');
      $table->unsignedBigInteger('chandoan_benh_id')->comment('Mã bệnh ICD10');
      $table->mediumText('chandoan_benh_diengiai')->comment('Diễn giải bệnh')->nullable();
      $table->integer('stt')->default(0)->comment('Số thứ tự của chẩn đoán trong danh sách chẩn đoán');

      // Chẩn đoán nơi chuyển đến: chính, phụ
      // Chẩn đoán vào viện: chính, phụ
      // Chẩn đoán ra viện: chính, phụ
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
