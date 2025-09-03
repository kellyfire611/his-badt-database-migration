<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;
// use Illuminate\Support\Facades\DB;

// class CreateTableBangKeSanpham extends Migration
// {
//   const TABLE_NAME = 'bangke_sanpham';

//   /**
//    * Run the migrations.
//    *
//    * @return void
//    */
//   public function up()
//   {
//     Schema::create(static::TABLE_NAME, function (Blueprint $table) {
//       // Primary key
//       $table->bigIncrements('bangke_sanpham_id');

//       // Foreign
//       $table->unsignedBigInteger('benhnhan_id');
//       $table->unsignedBigInteger('dotkham_id');
//       $table->unsignedBigInteger('dotkham_chuyenkhoa_id');
//       $table->unsignedBigInteger('dotkham_chuyenkhoa_phongkham_id');

//       $table->unsignedBigInteger('bangke_id');
//       $table->unsignedBigInteger('sanpham_id')->nullable();

//       // //$table->foreign('bangke_id')->references('bangke_id')->on('bangke');
//       // //$table->foreign('chuyenkhoa_id')->references('chuyenkhoa_id')->on('bangke_chuyenkhoa');
//       // //$table->foreign('sanpham_id')->references('sanpham_id')->on('dm_sanpham');
      
//       // Properties
//       $table->mediumText('bangke_sanpham_ten')->nullable();
//       $table->text('bangke_sanpham_cachdung')->nullable();
//       $table->string('bangke_sanpham_donvitinh')->nullable();
//       $table->decimal('bangke_sanpham_soluong')->nullable();
//       $table->decimal('bangke_sanpham_thuphi_dongia')->nullable();
//       $table->decimal('bangke_sanpham_thuphi_tyle_thanhtoan')->nullable();

//       $table->decimal('bangke_sanpham_baohiem_dongia')->nullable();
//       $table->decimal('bangke_sanpham_baohiem_tyle_thanhtoan')->nullable();

//       $table->decimal('bangke_sanpham_nguonthanhtoan_quy_bhxh')->nullable();
//       $table->decimal('bangke_sanpham_nguonthanhtoan_nguoibenh_cungchitra')->nullable();
//       $table->decimal('bangke_sanpham_nguonthanhtoan_khac')->nullable();
//       $table->decimal('bangke_sanpham_nguonthanhtoan_nguoibenh_tutra')->nullable();
//       $table->boolean('bangke_sanpham_tinhphi')->nullable();

//       // Log
//       $table->unsignedBigInteger('bangke_sanpham_old_id');
//       $table->unsignedBigInteger('donthuoc_chitiet_old_id');

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
