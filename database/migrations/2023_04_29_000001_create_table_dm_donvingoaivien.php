<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDmDonviNgoaivien extends Migration
{
  const TABLE_NAME = 'dm_donvingoaivien';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dm_donvingoaivien_id');

      $table->string('donvingoaivien_ma')->unique();
      $table->mediumText('donvingoaivien_ten');
      $table->mediumText('donvingoaivien_diachi')->nullable();
      $table->mediumText('donvingoaivien_sdt')->nullable();
      $table->mediumText('donvingoaivien_sotaikhoan')->nullable();
      $table->mediumText('donvingoaivien_masothue')->nullable();
      $table->longText('donvingoaivien_diengiai')->nullable();
      $table->integer('donvingoaivien_stt')->nullable();

      // Log
      $table->unsignedBigInteger('donvingoaivien_old_id');
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
