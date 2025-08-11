<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDotkham extends Migration
{
  const TABLE_NAME = 'dotkham_hanhchinh';

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
      $table->unsignedBigInteger('dotkham_id');
      $table->unsignedBigInteger('dm_quocgia_id');
      //$table->foreign('dm_quocgia_id')->references('dm_quocgia_id')->on('dm_quocgia');
      $table->unsignedBigInteger('dm_dantoc_id');
      //$table->foreign('dm_dantoc_id')->references('dm_dantoc_id')->on('dm_dantoc');
      $table->unsignedBigInteger('dm_tinhthanh_id');
      //$table->foreign('dm_tinhthanh_id')->references('dm_tinhthanh_id')->on('dm_tinhthanh');
      $table->unsignedBigInteger('dm_quanhuyen_id')->nullable();
      //$table->foreign('dm_quanhuyen_id')->references('dm_quanhuyen_id')->on('dm_quanhuyen');
      $table->unsignedBigInteger('dm_xaphuong_id')->nullable();
      //$table->foreign('dm_xaphuong_id')->references('dm_xaphuong_id')->on('dm_xaphuong');

      // Properties
      $table->mediumText('dotkham_benhnhan_diachi')->nullable();
      $table->mediumText('dotkham_benhnhan_nghenghiep')->nullable();
      $table->mediumText('dotkham_benhnhan_noilamviec')->nullable();
      $table->mediumText('dotkham_benhnhan_nguoithan_loaiquanhe')->nullable();
      $table->mediumText('dotkham_benhnhan_nguoithan_hoten')->nullable();
      $table->mediumText('dotkham_benhnhan_nguoithan_diachi')->nullable();
      $table->string('dotkham_benhnhan_nguoithan_sdt', 500)->nullable();
      $table->mediumText('dotkham_benhnhan_nguoithan_nghenghiep')->nullable();
      $table->mediumText('dotkham_benhnhan_nguoithan_noilamviec')->nullable();
      $table->mediumText('dotkham_benhnhan_nguoithan_hokhau_thuongtru')->nullable();
      $table->mediumText('dotkham_benhnhan_nguoithan_cmnd_so')->nullable();
      $table->mediumText('dotkham_benhnhan_nguoithan_cmnd_ngaycap')->nullable();
      $table->mediumText('dotkham_benhnhan_nguoithan_cmnd_noicap')->nullable();
      
      
      // Log
      $table->unsignedBigInteger('dotkham_old_id');
      $table->timestamp('log_ngay_tao')->comment('Thời điểm tạo')->useCurrent();
      $table->timestamp('log_ngay_capnhat')->comment('Thời điểm cập nhật')->useCurrent();
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
