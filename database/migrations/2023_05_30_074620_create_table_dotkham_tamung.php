<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDotkhamTamUng extends Migration
{
  const TABLE_NAME = 'dotkham_tamung';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dotkham_tamung_id');

      // Foreign
      $table->unsignedBigInteger('benhnhan_id');
      $table->unsignedBigInteger('dotkham_id');
      $table->unsignedBigInteger('dotkham_tamung_nguoithu')->comment('Người thu tạm ứng');

      // Properties
      $table->string('dotkham_tamung_sophieu')->comment('Số phiếu tạm ứng');
      $table->datetime('dotkham_tamung_ngay')->comment('Ngày nộp tạm ứng');
      $table->mediumText('dotkham_tamung_nguoinop')->comment('Người nộp tiền');
      $table->mediumText('dotkham_tamung_nguoinop_sdt')->comment('Số điện thoại người nộp tiền');
      $table->mediumText('dotkham_tamung_lydo')->comment('Lý do');
      $table->decimal('dotkham_tamung_sotien', 20, 4)->comment('Số tiền tạm ứng');
      
      
      // Log
      $table->unsignedBigInteger('dotkham_old_id');
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
