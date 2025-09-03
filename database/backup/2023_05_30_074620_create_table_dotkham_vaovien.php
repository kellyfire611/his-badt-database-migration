<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;
// use Illuminate\Support\Facades\DB;

// class CreateTableDotkhamVaoVien extends Migration
// {
//   const TABLE_NAME = 'dotkham_vaovien';

//   /**
//    * Run the migrations.
//    *
//    * @return void
//    */
//   public function up()
//   {
//     Schema::create(static::TABLE_NAME, function (Blueprint $table) {
//       // Primary key
//       $table->bigIncrements('dotkham_vaovien_id');

//       // Foreign
//       $table->unsignedBigInteger('benhnhan_id');
//       $table->unsignedBigInteger('dotkham_id');

//       // Properties
//       $table->timestamp('dotkham_vaovien_ngay')->comment('Ngày vào viện?');
//       $table->mediumText('dotkham_vaovien_lydo')->comment('Lý do vào viện')->nullable();
//       $table->string('dotkham_vaovien_hinhthuc_e')->comment('Hình thức vào viện|#1: Vào từ cấp cứu; #2: Vào từ khoa khám; #3: Vào từ khoa điều trị')->nullable();
//       $table->boolean('dotkham_la_capcuu')->default(false)->comment('Là cấp cứu?');

//       $table->string('dotkham_noichuyenden_e')->comment('Nơi giới thiệu|#1: Cơ quan y tế; #2: Tự đến; #3: Khác')->nullable();
//       $table->unsignedBigInteger('dotkham_noichuyenden_donvi')->comment('Đơn vị giới thiệu đến (Cơ sở y tế trong BHXH)')->nullable();
//       $table->timestamp('dotkham_noichuyenden_vaovien_ngay')->comment('Ngày vào viện của nơi chuyển đến?');
//       $table->timestamp('dotkham_noichuyenden_ravien_ngay')->comment('Ngày ra viện của nơi chuyển đến?');
      
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
