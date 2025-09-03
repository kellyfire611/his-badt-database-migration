<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;
// use Illuminate\Support\Facades\DB;

// class CreateTableXuatChiTiet extends Migration
// {
//   const TABLE_NAME = 'xuat_chitiet';

//   /**
//    * Run the migrations.
//    *
//    * @return void
//    */
//   public function up()
//   {
//     Schema::create(static::TABLE_NAME, function (Blueprint $table) {
//       // Primary key
//       $table->bigIncrements('xuat_chitiet_id');

//       // Foreign
//       $table->unsignedBigInteger('xuat_id');
//       //$table->foreign('xuat_id')->references('xuat_id')->on('xuat');
//       $table->unsignedBigInteger('dm_sanpham_id');
//       //$table->foreign('dm_sanpham_id')->references('dm_sanpham_id')->on('dm_sanpham');

//       // Properties
//       $table->decimal('xuat_chitiet_dongia', 18, 4);
//       $table->decimal('xuat_chitiet_soluong', 18, 4);
//       $table->boolean('xuat_chitiet_cotinhphi');
//       $table->string('xuat_chitiet_diengiai')->nullable();
//       $table->decimal('xuat_chitiet_soluong_hoantra', 18, 4)->nullable();

//       // Log
//       $table->unsignedBigInteger('xuat_chitiet_old_id');
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
