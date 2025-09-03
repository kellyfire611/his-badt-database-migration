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
      $table->bigIncrements('dotkham_chuyenkhoa_id');

      // Foreign
      $table->unsignedBigInteger('benhnhan_id');
      $table->unsignedBigInteger('dotkham_id');
      
      // Properties
      $table->unsignedBigInteger('vaokhoa_khoa_id')->nullable()->commnent('Khoa vào');
      $table->timestamp('vaokhoa_ngay')->nullable()->comment('Ngày vào khoa');
      $table->unsignedBigInteger('vaokhoa_buong_id')->nullable()->comment('Vào khoa buồng');
      $table->string('vaokhoa_giuong')->nullable()->comment('Vào khoa giường');

      $table->unsignedBigInteger('rakhoa_khoa_id')->nullable()->commnent('Khoa ra');
      $table->timestamp('rakhoa_ngay')->nullable()->comment('Ngày ra khoa');

      $table->integer('dieutri_songay')->nullable()->comment('Số ngày điều trị');
      $table->boolean('lakhoa_vaovien')->nullable()->comment('Là khoa vào viện');
      $table->unsignedBigInteger('truongkhoa_id')->nullable()->comment('Trưởng khoa');
      $table->mediumText('giuong_dachuyen')->nullable()->comment('Danh sách giường đã chuyển');

      
      // Log
      $table->unsignedBigInteger('dotkham_old_id');
      $table->unsignedBigInteger('chuyenkhoa_old_id');
      $table->timestamp('log_ngay_tao')->comment('Thời điểm tạo')->useCurrent();
      $table->timestamp('log_ngay_capnhat')->comment('Thời điểm cập nhật')->nullable();
      $table->timestamp('log_ngay_xoa')->comment('Thời điểm xóa')->nullable();
      $table->unsignedBigInteger('log_nguoi_tao_id')->comment('Người tạo')->nullable();
      $table->unsignedBigInteger('log_nguoi_capnhat_id')->comment('Người cập nhật')->nullable();
      $table->unsignedBigInteger('log_nguoi_xoa_id')->comment('Người xóa')->nullable();
      //$table->foreign('log_nguoi_tao_id')->references('user_id')->on('users');
      //$table->foreign('log_nguoi_capnhat_id')->references('user_id')->on('users');
      //$table->foreign('log_nguoi_xoa_id')->references('user_id')->on('users');
      $table->string('guid', 36)->default(DB::raw('gen_random_uuid()'));
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
