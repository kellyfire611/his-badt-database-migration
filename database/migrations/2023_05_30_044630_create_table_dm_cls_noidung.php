<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDmClsNoiDung extends Migration
{
  const TABLE_NAME = 'dm_cls_noidung';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dm_cls_noidung_id');

      // Foreign
      $table->unsignedBigInteger('dm_cls_noidung_nhom_id');

      // Properties
      $table->string('cls_noidung_ma', 250)->unique();
      $table->mediumText('cls_noidung_ten');
      $table->mediumText('cls_noidung_diengiai')->nullable();
      $table->string('cls_noidung_phamvi')->comment('Phạm vi thực hiện|#nam: Nam; #nu: Nữ; #tatca: Tất cả')->nullable();
      $table->integer('cls_noidung_stt')->nullable();
      $table->mediumText('cls_noidung_giatri_cantren')->nullable();
      $table->mediumText('cls_noidung_giatri_canduoi')->nullable();
      $table->mediumText('cls_noidung_giatri_chisobinhthuong')->nullable();
      $table->mediumText('cls_noidung_giatri_macdinh')->nullable();
      
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
