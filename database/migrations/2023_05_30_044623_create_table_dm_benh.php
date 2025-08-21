<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDmBenh extends Migration
{
  const TABLE_NAME = 'dm_benh';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dm_benh_id');

      // Foreign
      $table->unsignedBigInteger('dm_benh_nhom_id');
      $table->unsignedBigInteger('dm_benh_chuong_nhom_id');
      //$table->foreign('dm_benh_nhom_id')->references('dm_benh_nhom_id')->on('dm_benh_nhom');
      //$table->foreign('dm_benh_chuong_nhom_id')->references('dm_benh_chuong_nhom_id')->on('dm_benh_chuong_nhom');
      
      // Properties
      $table->string('benh_ma')->unique();
      $table->mediumText('benh_ten');
      $table->mediumText('benh_ten_en')->nullable();
      $table->longText('benh_diengiai')->nullable();
      $table->boolean('benh_la_truyennhiem')->nullable();
      $table->boolean('benh_la_mantinh')->nullable();
      $table->boolean('benh_la_ngoai_dinhsuat')->nullable();
      $table->integer('benh_stt')->nullable();

      // Log
      $table->unsignedBigInteger('benh_old_id');
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
