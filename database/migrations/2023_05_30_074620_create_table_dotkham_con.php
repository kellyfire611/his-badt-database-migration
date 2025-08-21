<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDotkhamCon extends Migration
{
  const TABLE_NAME = 'dotkham_con';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('id');

      // Foreign
      $table->unsignedBigInteger('me_benhnhan_id')->comment('Bệnh nhân mẹ');
      $table->unsignedBigInteger('me_dotkham_id')->comment('ID Đợt khám mẹ');
      $table->unsignedBigInteger('con_dotkham_id')->comment('ID Đợt khám con');

      // Properties
      $table->timestamp('con_ngaygiosinh')->comment('Ngày giờ sinh');
      $table->mediumText('con_tencha')->comment('Họ tên cha');
      $table->mediumText('con_noisinh')->comment('Nơi sinh');
      $table->decimal('con_cannang', 20, 2)->comment('Cân nặng');
      $table->integer('con_thu')->comment('Con thứ mấy?');
      $table->mediumText('con_nguoidode')->comment('Người đỡ đẻ');
      $table->mediumText('con_dacdiemkhac')->comment('Đặc điểm khác');
      $table->integer('me_solansinh')->comment('Số lần sinh của mẹ');
      $table->integer('me_socon_hiensong')->comment('Số con hiện sống trong lần sinh của mẹ');
      $table->string('con_chungsinh_so', 250)->comment('Số giấy chứng sinh');
      $table->string('con_chungsinh_soquyen', 250)->comment('Số quyển giấy chứng sinh');
      $table->timestamp('con_chungsinh_ngaycap')->comment('Ngày cấp giấy chứng sinh');
      $table->unsignedBigInteger('con_nguoighiphieu')->comment('Người ghi phiếu');
      $table->string('con_so_bhxh_nnd', 250)->comment('Số bhxh người nuôi dưỡng');
      
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
