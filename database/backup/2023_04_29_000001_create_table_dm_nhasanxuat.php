<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;
// use Illuminate\Support\Facades\DB;

// class CreateTableDmNhaSanXuat extends Migration
// {
//   const TABLE_NAME = 'dm_nhasanxuat';

//   /**
//    * Run the migrations.
//    *
//    * @return void
//    */
//   public function up()
//   {
//     Schema::create(static::TABLE_NAME, function (Blueprint $table) {
//       // Primary key
//       $table->bigIncrements('dm_nhasanxuat_id');

//       // Properties
//       $table->string('nhasanxuat_ma')->unique();
//       $table->mediumText('nhasanxuat_ten');
//       $table->mediumText('nhasanxuat_diachi')->nullable();
//       $table->mediumText('nhasanxuat_sdt')->nullable();
//       $table->mediumText('nhasanxuat_sotaikhoan')->nullable();
//       $table->mediumText('nhasanxuat_masothue')->nullable();
//       $table->longText('nhasanxuat_diengiai')->nullable();
//       $table->integer('nhasanxuat_stt')->nullable();

//       // Log
//       $table->unsignedBigInteger('nhasanxuat_old_id');
//       $table->timestamp('log_ngay_tao')->comment('Thời điểm tạo')->useCurrent();
//       $table->timestamp('log_ngay_capnhat')->comment('Thời điểm cập nhật')->nullable();
//       $table->timestamp('log_ngay_xoa')->comment('Thời điểm xóa')->nullable();
//       $table->unsignedBigInteger('log_nguoi_tao_id')->comment('Người tạo')->nullable();
//       $table->unsignedBigInteger('log_nguoi_capnhat_id')->comment('Người cập nhật')->nullable();
//       $table->unsignedBigInteger('log_nguoi_xoa_id')->comment('Người xóa')->nullable();
//       //$table->foreign('log_nguoi_tao_id')->references('user_id')->on('users');
//       //$table->foreign('log_nguoi_capnhat_id')->references('user_id')->on('users');
//       //$table->foreign('log_nguoi_xoa_id')->references('user_id')->on('users');
//       $table->string('guid', 36)->default(DB::raw('gen_random_uuid()'));
//     });
//   }

//   /**
//    * Reverse the migrations.
//    *
//    * @return void
//    */
//   public function down()
//   {
//     Schema::dropIfExists(static::TABLE_NAME);
//   }
// }
