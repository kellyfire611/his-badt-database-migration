<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDotkhamRaVien extends Migration
{
  const TABLE_NAME = 'dotkham_noigioithieu';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dotkham_ravien_id');

      // Foreign
      $table->unsignedBigInteger('benhnhan_id');
      $table->unsignedBigInteger('dotkham_id');

      // Properties
      $table->timestamp('dotkham_ravien_ngay')->comment('Ngày ra viện?');
      $table->integer('dotkham_ravien_hinhthuc_e')->comment('Hình thức ra viện|#1: Ra viện; #2: Xin về; #3: Bỏ về; #4: Đưa về')->nullable();
      $table->integer('dotkham_ravien_dieutri_hinhthuc_e')->comment('Hình thức điều trị|#1')->nullable();
      $table->integer('dotkham_ravien_dieutri_ketqua_e')->comment('Kết quả điều trị|#1')->nullable();
      $table->integer('dotkham_ravien_giaiphaubenh_e')->comment('Giải phẩu bệnh|#1: Lành tính; #2: Nghi ngờ; #3: Ác tính')->nullable();
      $table->mediumText('dotkham_ravien_lydo')->comment('Lý do ra viện')->nullable();
      $table->mediumText('dotkham_ravien_loidan')->comment('Lời dặn ra viện')->nullable();
      $table->string('dotkham_ravien_sogiay')->comment('Số giấy ra viện')->nullable();
      
      
      
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
