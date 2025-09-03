<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;
// use Illuminate\Support\Facades\DB;

// class CreateTableClsKetQuaChiTiet extends Migration
// {
//   const TABLE_NAME = 'cls_ketqua_chitiet';

//   /**
//    * Run the migrations.
//    *
//    * @return void
//    */
//   public function up()
//   {
//     Schema::create(static::TABLE_NAME, function (Blueprint $table) {
//       // Primary key
//       $table->bigIncrements('cls_ketqua_chitiet_id');

//       // Foreign
//       $table->unsignedBigInteger('cls_ketqua_id');
//       $table->unsignedBigInteger('dm_cls_noidung_id')->nullable();
      
//       // Properties
//       $table->mediumText('cls_ketqua_chitiet_tennoidung')->nullable()->comment('Tên nội dung CLS');
//       $table->mediumText('cls_ketqua_chitiet_1')->nullable()->comment('Kết quả CLS 1');
//       $table->mediumText('cls_ketqua_chitiet_2')->nullable()->comment('Kết quả CLS 2');
//       $table->mediumText('cls_ketqua_chitiet_3')->nullable()->comment('Kết quả CLS 3');
//       $table->mediumText('cls_ketqua_chitiet_ketluan')->nullable()->comment('Kết luận');
//       $table->mediumText('cls_ketqua_chitiet_denghi')->nullable()->comment('Đề nghị');

//       $table->unsignedBigInteger('cls_chucnang_loai_id')->nullable()->comment('Loại chức năng cận lâm sàng');
//       $table->unsignedBigInteger('cls_chucnang_nhom_id')->nullable()->comment('Nhóm chức năng cận lâm sàng');

//       // Log
//       $table->unsignedBigInteger('cls_ketqua_chitiet_old_id');
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
