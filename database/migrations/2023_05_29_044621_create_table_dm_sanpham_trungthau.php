<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDmSanphamTrungthau extends Migration
{
  const TABLE_NAME = 'dm_sanpham_trungthau';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dm_sanpham_trungthau_id');

      // Foreign
      $table->unsignedBigInteger('dm_thau_id');
      //$table->foreign('dm_thau_id')->references('dm_thau_id')->on('dm_thau');
      $table->unsignedBigInteger('dm_sanpham_id');
      //$table->foreign('dm_sanpham_id')->references('dm_sanpham_id')->on('dm_sanpham');
      $table->unsignedBigInteger('dm_nhacungcap_id')->nullable();
      //$table->foreign('dm_nhacungcap_id')->references('dm_nhacungcap_id')->on('dm_nhacungcap');

      // Properties
      $table->decimal('sanpham_trungthau_soluong', 18, 4);
      $table->decimal('sanpham_trungthau_dongia', 18, 4);
      $table->decimal('sanpham_trungthau_phamvinhapkho', 18, 4)->nullable();
      $table->mediumText('sanpham_trungthau_so_quyetdinh')->nullable();
      $table->longText('sanpham_trungthau_diengiai')->nullable();
      $table->integer('sanpham_trungthau_stt')->nullable();

      // Log
      $table->unsignedBigInteger('sanpham_trungthau_old_id');
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
