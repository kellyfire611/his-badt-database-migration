<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDotkhamTuVong extends Migration
{
  const TABLE_NAME = 'dotkham_tuvong';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dotkham_tuvong_id');

      // Foreign
      $table->unsignedBigInteger('benhnhan_id');
      $table->unsignedBigInteger('dotkham_id');

      // Properties
      $table->timestamp('dotkham_tuvong_thoigian')->comment('Thời gian tử vong');
      $table->integer('dotkham_tuvong_tinhinh_e')->comment('Tình hình tử vong|#1: Trong 24 giờ vào viện; #2: Trong 48 giờ vào viện; #3: Trong 72 giờ vào viện');
      $table->integer('dotkham_tuvong_nguyennhan_e')->comment('Nguyên nhân tử vong|#1: do bệnh; #2: do tai biến điều trị; #3: Khác');
      $table->mediumText('dotkham_tuvong_diengiai')->comment('Diễn giải tử vong');
      $table->boolean('dotkham_tuvong_khamnghiem')->comment('Có khám nghiệm tử vong không?');

      $table->string('dotkham_baotu_sogiay', 200)->comment('Số giấy báo tử');
      $table->string('dotkham_baotu_soquyen', 200)->comment('Số quyển báo tử');
      $table->integer('dotkham_baotu_tinhtrang_tuvong_e')->comment('Tình trạng tử vong|#1: tử vong tại cơ sở khám chữa bệnh; #2: tử vong trên đường đến cơ sở khám chữa bệnh');
      $table->mediumText('dotkham_baotu_nguoilap')->comment('Người lập giấy báo tử');
      $table->timestamp('dotkham_baotu_ngaycap')->comment('Ngày cấp giấy báo tử');
      $table->timestamp('dotkham_baotu_ma')->comment('Mã giấy báo tử');
      
      
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
