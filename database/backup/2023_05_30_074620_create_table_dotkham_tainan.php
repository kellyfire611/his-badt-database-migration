<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;
// use Illuminate\Support\Facades\DB;

// class CreateTableDotkhamTaiNan extends Migration
// {
//   const TABLE_NAME = 'dotkham_tainan';

//   /**
//    * Run the migrations.
//    *
//    * @return void
//    */
//   public function up()
//   {
//     Schema::create(static::TABLE_NAME, function (Blueprint $table) {
//       // Primary key
//       $table->bigIncrements('dotkham_tainan_id');

//       // Foreign
//       $table->unsignedBigInteger('benhnhan_id');
//       $table->unsignedBigInteger('dotkham_id');
//       $table->unsignedBigInteger('dm_tinhthanh_id')->nullable();
//       //$table->foreign('dm_tinhthanh_id')->references('dm_tinhthanh_id')->on('dm_tinhthanh');
//       $table->unsignedBigInteger('dm_quanhuyen_id')->nullable();
//       //$table->foreign('dm_quanhuyen_id')->references('dm_quanhuyen_id')->on('dm_quanhuyen');
//       $table->unsignedBigInteger('dm_xaphuong_id')->nullable();
//       //$table->foreign('dm_xaphuong_id')->references('dm_xaphuong_id')->on('dm_xaphuong');

//       // Properties
//       $table->timestamp('dotkham_tainan_thoigian')->comment('Thời gian tai nạn?');
//       $table->boolean('dotkham_tainan_xayra_e')->comment('Có xảy ra không?')->nullable();
//       $table->integer('dotkham_tainan_bophanbithuong_e')->comment('Bộ phận bị thương|#1')->nullable();
//       $table->integer('dotkham_tainan_diadiem_e')->comment('Địa điểm|#1')->nullable();
//       $table->integer('dotkham_tainan_nguyennhan_e')->comment('Nguyên nhân|#1')->nullable();
//       $table->integer('dotkham_tainan_ngodoc_e')->comment('Ngộ độc|#1')->nullable();
//       $table->integer('dotkham_tainan_xutri_e')->comment('Xử trí|#1')->nullable();
//       $table->mediumText('dotkham_tainan_noixayra')->comment('Xử trí|#1')->nullable();
//       $table->boolean('dotkham_tainan_daxacnhan_coquan_congan')->comment('Đã xác nhận cơ quan công an?')->nullable();
      
      
      
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
