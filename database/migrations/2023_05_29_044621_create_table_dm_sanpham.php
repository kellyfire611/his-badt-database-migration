<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDmSanpham extends Migration
{
  const TABLE_NAME = 'dm_sanpham';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dm_sanpham_id');

      // Foreign
      $table->unsignedBigInteger('dm_sanpham_loai_id');
      //$table->foreign('dm_sanpham_loai_id')->references('dm_sanpham_loai_id')->on('dm_sanpham_loai');
      $table->unsignedBigInteger('dm_sanpham_nhom_id');
      //$table->foreign('dm_sanpham_nhom_id')->references('dm_sanpham_nhom_id')->on('dm_sanpham_nhom');
      $table->unsignedBigInteger('dm_donvitinh_id');
      //$table->foreign('dm_donvitinh_id')->references('dm_donvitinh_id')->on('dm_donvitinh');
      $table->unsignedBigInteger('dm_nhasanxuat_id')->nullable();
      //$table->foreign('dm_nhasanxuat_id')->references('dm_nhasanxuat_id')->on('dm_nhasanxuat');
      $table->unsignedBigInteger('dm_nuocsanxuat_id')->nullable();
      //$table->foreign('dm_nuocsanxuat_id')->references('dm_quocgia_id')->on('dm_quocgia');
      
      // Properties
      $table->string('sanpham_ma')->unique();
      $table->mediumText('sanpham_ten');
      $table->mediumText('sanpham_hoatchat')->nullable();
      $table->mediumText('sanpham_nongdohamluong')->nullable();
      $table->mediumText('sanpham_quycachdonggoi')->nullable();
      $table->mediumText('sanpham_tennhom')->nullable();
      $table->mediumText('sanpham_sokiemsoat')->nullable();
      $table->mediumText('sanpham_sogiayphep_dangkynhapkhau')->nullable();
      $table->integer('sanpham_diensudung')->nullable();
      $table->boolean('sanpham_la_ngoainhap')->nullable();
      $table->boolean('sanpham_la_tanduoc')->nullable();
      $table->integer('sanpham_loai_thuocdacbiet')->nullable();
      $table->decimal('sanpham_soluong_tontoithieu')->nullable();
      $table->longText('sanpham_diengiai')->nullable();
      $table->integer('sanpham_stt')->nullable();
      $table->timestamps();

      // Log
      $table->unsignedBigInteger('sanpham_old_id');
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
