<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;
// use Illuminate\Support\Facades\DB;

// class CreateTableBenhnhanGiayto extends Migration
// {
//   const TABLE_NAME = 'benhnhan_giayto';

//   /**
//    * Run the migrations.
//    *
//    * @return void
//    */
//   public function up()
//   {
//     Schema::create(static::TABLE_NAME, function (Blueprint $table) {
//       // Primary key
//       $table->bigIncrements('giayto_id');

//       // Foreign
//       $table->unsignedBigInteger('benhnhan_id');

//       // Properties
//       $table->string('giayto_so');
//       $table->string('giayto_loai', 250)->nullable()->comment('Loại giấy tờ: #bhyt: Bảo hiểm Y tế; #chungsinh: Giấy chứng sinh; #khaisinh: Giấy khai sinh');
//       $table->timestamp('giayto_ngayhieuluc')->nullable()->comment('Ngày hiệu lực');
//       $table->timestamp('giayto_ngayhethan')->nullable()->comment('Ngày hết hạn');
//       $table->integer('giayto_noicap_id')->nullable()->comment('Nơi cấp (Danh mục Bệnh viện BHXH)');
//       $table->boolean('giayto_dangsudung')->comment('Đang sử dụng?');

//       // Log
//       $table->unsignedBigInteger('giayto_old_id');
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
