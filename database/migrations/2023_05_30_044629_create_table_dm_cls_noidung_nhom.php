<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDmClsNoiDungNhom extends Migration
{
  const TABLE_NAME = 'dm_cls_noidung_nhom';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dm_cls_noidung_nhom_id');

      // Foreign
      $table->unsignedBigInteger('dm_cls_chucnang_nhom_id');

      // Properties
      $table->string('cls_noidung_nhom_ma', 250)->unique();
      $table->mediumText('cls_noidung_nhom_ten');
      $table->mediumText('cls_noidung_nhom_diengiai')->nullable();
      $table->string('cls_noidung_nhom_theloai')->comment('Thể loại CLS|#cdha: chẩn đoán hình ảnh; #xetnghiem: xét nghiệm')->nullable();
      $table->integer('cls_noidung_nhom_stt')->nullable();
      
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
