<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;
// use Illuminate\Support\Facades\DB;

// class CreateTableDotkhamThuPhi extends Migration
// {
//   const TABLE_NAME = 'dotkham_thuphi';

//   /**
//    * Run the migrations.
//    *
//    * @return void
//    */
//   public function up()
//   {
//     Schema::create(static::TABLE_NAME, function (Blueprint $table) {
//       // Primary key
//       $table->bigIncrements('dotkham_thuphi_id');

//       // Foreign
//       $table->unsignedBigInteger('benhnhan_id');
//       $table->unsignedBigInteger('dotkham_id');
//       $table->unsignedBigInteger('chuyenkhoa_id');
//       $table->unsignedBigInteger('dotkham_thuphi_nguoithu')->comment('Người thu phí');

//       // Properties
//       $table->string('dotkham_thuphi_sophieu')->comment('Số phiếu thu phí');
//       $table->datetime('dotkham_thuphi_ngay')->comment('Ngày nộp phí');
//       $table->mediumText('dotkham_thuphi_nguoinop')->comment('Người nộp tiền');
//       $table->mediumText('dotkham_thuphi_nguoinop_sdt')->comment('Số điện thoại người nộp tiền');
//       $table->mediumText('dotkham_thuphi_lydo')->comment('Lý do');
//       $table->decimal('dotkham_thuphi_sotien', 20, 4)->comment('Số tiền phí');
      
      
//       // Log
//       $table->unsignedBigInteger('dotkham_old_id');
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
