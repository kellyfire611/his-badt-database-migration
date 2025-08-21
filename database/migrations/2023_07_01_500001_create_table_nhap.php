<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableNhap extends Migration
{
  const TABLE_NAME = 'nhap';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('nhap_id');

      // Foreign
      $table->unsignedBigInteger('dm_soketoan_id');
      //$table->foreign('dm_soketoan_id')->references('dm_soketoan_id')->on('dm_soketoan');
      $table->unsignedBigInteger('dm_nhapxuat_loai_id');
      //$table->foreign('dm_nhapxuat_loai_id')->references('dm_nhapxuat_loai_id')->on('dm_nhapxuat_loai');
      $table->unsignedBigInteger('nhap_vao_kho_id');
      //$table->foreign('nhap_vao_kho_id')->references('dm_kho_id')->on('dm_kho');
      $table->unsignedBigInteger('nhap_tu_kho_id')->nullable();
      //$table->foreign('nhap_tu_kho_id')->references('dm_kho_id')->on('dm_kho');
      $table->unsignedBigInteger('xuat_id')->nullable();
      //$table->foreign('xuat_id')->references('xuat_id')->on('xuat');

      // Properties
      $table->string('nhap_ma');
      $table->timestamp('nhap_ngay');
      $table->mediumText('nhap_lydo')->nullable();
      $table->decimal('nhap_tylethue', 18, 2)->nullable();
      $table->mediumText('nhap_nguoi_giao')->nullable();
      $table->string('nhap_chungtu')->nullable();
      $table->timestamp('nhap_ngay_laphoadon')->nullable();
      $table->mediumText('nhap_diengiai')->nullable();
      $table->boolean('nhap_xacnhan');
      $table->boolean('nhap_dasudung');

      // Log
      $table->unsignedBigInteger('nhap_old_id');
      $table->timestamp('log_ngay_tao')->comment('Thời điểm tạo')->useCurrent();
      $table->timestamp('log_ngay_capnhat')->comment('Thời điểm cập nhật')->nullable();
      $table->timestamp('log_ngay_xoa')->comment('Thời điểm xóa')->nullable();
      $table->unsignedBigInteger('log_nguoi_tao_id')->comment('Người tạo')->nullable();
      $table->unsignedBigInteger('log_nguoi_capnhat_id')->comment('Người cập nhật')->nullable();
      $table->unsignedBigInteger('log_nguoi_xoa_id')->comment('Người xóa')->nullable();
      //$table->foreign('log_nguoi_tao_id')->references('user_id')->on('users');
      //$table->foreign('log_nguoi_capnhat_id')->references('user_id')->on('users');
      //$table->foreign('log_nguoi_xoa_id')->references('user_id')->on('users');

      // Log in phiếu
      $table->integer('log_lan_in')->nullable();
      $table->timestamp('log_ngay_in')->comment('Thời điểm in')->nullable();
      $table->unsignedBigInteger('log_nguoi_in_id')->comment('Người in')->nullable();
      //$table->foreign('log_nguoi_in_id')->references('user_id')->on('users');
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
