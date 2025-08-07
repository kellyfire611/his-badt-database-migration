<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableBenhNhan extends Migration
{
  const TABLE_NAME = 'benhnhan';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('benhnhan_id');

      // Foreign
      $table->unsignedBigInteger('dm_quocgia_id');
      $table->foreign('dm_quocgia_id')->references('dm_quocgia_id')->on('dm_quocgia');
      $table->unsignedBigInteger('dm_dantoc_id');
      $table->foreign('dm_dantoc_id')->references('dm_dantoc_id')->on('dm_dantoc');
      $table->unsignedBigInteger('dm_tinhthanh_id');
      $table->foreign('dm_tinhthanh_id')->references('dm_tinhthanh_id')->on('dm_tinhthanh');
      $table->unsignedBigInteger('dm_quanhuyen_id')->nullable();
      $table->foreign('dm_quanhuyen_id')->references('dm_quanhuyen_id')->on('dm_quanhuyen');
      $table->unsignedBigInteger('dm_xaphuong_id')->nullable();
      $table->foreign('dm_xaphuong_id')->references('dm_xaphuong_id')->on('dm_xaphuong');

      // Properties
      $table->string('benhnhan_ma')->unique();
      $table->mediumText('benhnhan_hoten')->nullable();
      $table->string('benhnhan_ngaysinh_text')->nullable();;
      $table->timestamp('benhnhan_ngaysinh')->nullable();;
      $table->integer('benhnhan_gioitinh')->nullable()->comment('#0: Nam; #1: Nữ');
      $table->string('benhnhan_sdt')->nullable();
      $table->string('benhnhan_trinhdovanhoa')->nullable();
      $table->string('benhnhan_nghenghiep')->nullable();
      $table->string('benhnhan_noilamviec')->nullable();
      $table->string('benhnhan_tiensubenh')->nullable();
      $table->mediumText('benhnhan_hokhau_thuongtru')->nullable();
      $table->mediumText('benhnhan_cmnd_so')->nullable();
      $table->mediumText('benhnhan_cmnd_ngaycap')->nullable();
      $table->mediumText('benhnhan_cmnd_noicap')->nullable();

      // Log
      $table->unsignedBigInteger('benhnhan_old_id');
      $table->timestamp('log_ngay_tao')->comment('Thời điểm tạo')->useCurrent();
      $table->timestamp('log_ngay_capnhat')->comment('Thời điểm cập nhật')->useCurrent();
      $table->timestamp('log_ngay_xoa')->comment('Thời điểm xóa')->nullable();
      $table->unsignedBigInteger('log_nguoi_tao_id')->comment('Người tạo')->nullable();
      $table->unsignedBigInteger('log_nguoi_capnhat_id')->comment('Người cập nhật')->nullable();
      $table->unsignedBigInteger('log_nguoi_xoa_id')->comment('Người xóa')->nullable();
      $table->foreign('log_nguoi_tao_id')->references('user_id')->on('users');
      $table->foreign('log_nguoi_capnhat_id')->references('user_id')->on('users');
      $table->foreign('log_nguoi_xoa_id')->references('user_id')->on('users');
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
