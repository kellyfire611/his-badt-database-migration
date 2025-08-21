<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDmChiPhi extends Migration
{
  const TABLE_NAME = 'dm_chiphi';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dm_chiphi_id');

      // Foreign
      $table->unsignedBigInteger('dm_chiphi_nhom_id');
      
      // Properties
      $table->string('chiphi_ma')->unique();
      $table->string('chiphi_ten');
      $table->integer('chiphi_donvitinh')->nullable();
      $table->integer('chiphi_stt')->nullable();
      $table->integer('chiphi_pttt_loai_e')->comment('Loại PTTT|#1: Loại 1; #2: Loại 2; #3: Loại 3; #4: Đặc biệt')->nullable();
      $table->string('chiphi_stt_qd_duyetgia', 250)->comment('Số thứ tự quyết định duyệt giá')->nullable();
      $table->string('chiphi_stt_dmkt_byt', 250)->comment('Số thứ tự danh mục kỹ thuật BYT')->nullable();
      $table->mediumText('chiphi_diengiai')->comment('Diễn giải')->nullable();

      // Log
      $table->unsignedBigInteger('chiphi_old_id');
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
