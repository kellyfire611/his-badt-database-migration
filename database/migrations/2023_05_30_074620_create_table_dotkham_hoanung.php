<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDotkhamHoanUng extends Migration
{
  const TABLE_NAME = 'dotkham_hoanung';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dotkham_hoanung_id');

      // Foreign
      $table->unsignedBigInteger('benhnhan_id');
      $table->unsignedBigInteger('dotkham_id');
      $table->unsignedBigInteger('dotkham_hoanung_nguoichi')->comment('Người chi hoàn ứng');

      // Properties
      $table->string('dotkham_hoanung_sophieu')->comment('Số phiếu hoàn ứng');
      $table->mediumText('dotkham_hoanung_nguoinhan')->comment('Người nhận');
      $table->mediumText('dotkham_hoanung_lydo')->comment('Lý do');
      $table->decimal('dotkham_hoanung_sotien', 20, 4)->comment('Số tiền hoàn ứng');
      
      
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
