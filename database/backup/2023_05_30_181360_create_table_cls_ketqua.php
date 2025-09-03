<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;
// use Illuminate\Support\Facades\DB;

// class CreateTableClsKetQua extends Migration
// {
//   const TABLE_NAME = 'cls_ketqua';

//   /**
//    * Run the migrations.
//    *
//    * @return void
//    */
//   public function up()
//   {
//     Schema::create(static::TABLE_NAME, function (Blueprint $table) {
//       // Primary key
//       $table->bigIncrements('cls_ketqua_id');

//       // Foreign
//       $table->unsignedBigInteger('benhnhan_id');
//       $table->unsignedBigInteger('dotkham_id');
//       $table->unsignedBigInteger('dotkham_chuyenkhoa_id');
//       $table->unsignedBigInteger('dotkham_chuyenkhoa_phongkham_id');

//       $table->unsignedBigInteger('bangke_id');
//       $table->unsignedBigInteger('bangke_chiphi_id');
//       $table->unsignedBigInteger('may_id')->nullable();
      
//       // Properties
//       $table->string('cls_ketqua_sophieu')->nullable();
//       $table->mediumText('cls_ketqua_tenloaicls')->nullable()->comment('Tên loại kết quả CLS');
//       $table->timestamp('cls_ketqua_ngaynhanmau')->nullable()->comment('Ngày nhận mẫu');
//       $table->timestamp('cls_ketqua_ngaythuchien')->nullable()->comment('Ngày thực hiện kết quả CLS');
//       $table->mediumText('cls_ketqua_bacsi_chuyenkhoa')->nullable()->comment('Bác sĩ cho kết quả CLS');
//       $table->mediumText('cls_ketqua_ketluan')->nullable()->comment('Kết luận');
//       $table->mediumText('cls_ketqua_denghi')->nullable()->comment('Đề nghị');

//       $table->unsignedBigInteger('cls_chucnang_loai_id')->nullable()->comment('Loại chức năng cận lâm sàng');
//       $table->unsignedBigInteger('cls_chucnang_nhom_id')->nullable()->comment('Nhóm chức năng cận lâm sàng');

//       // Log
//       $table->unsignedBigInteger('cls_ketqua_old_id');
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
