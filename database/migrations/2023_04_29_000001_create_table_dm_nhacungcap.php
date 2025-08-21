<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDmNhaCungCap extends Migration
{
  const TABLE_NAME = 'dm_nhacungcap';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dm_nhacungcap_id');

      // Foreign
      $table->unsignedBigInteger('dm_nganhang_id')->nullable();
      //$table->foreign('dm_nganhang_id')->references('dm_nganhang_id')->on('dm_nganhang');
      
      // Properties
      $table->string('nhacungcap_ma')->unique();
      $table->mediumText('nhacungcap_ten');
      $table->mediumText('nhacungcap_diachi')->nullable();
      $table->mediumText('nhacungcap_sdt')->nullable();
      $table->mediumText('nhacungcap_sotaikhoan')->nullable();
      $table->mediumText('nhacungcap_masothue')->nullable();
      $table->longText('nhacungcap_diengiai')->nullable();
      $table->integer('nhacungcap_stt')->nullable();

      // Log
      $table->unsignedBigInteger('nhacungcap_old_id');
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
