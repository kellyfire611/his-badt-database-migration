<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDotkhamChuyenkhoaPhongKham extends Migration
{
  const TABLE_NAME = 'dotkham_chuyenkhoa_phongkham';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dotkham_chuyenkhoa_phongkham_id');

      // Foreign
      $table->unsignedBigInteger('benhnhan_id');
      $table->unsignedBigInteger('dotkham_id');
      $table->unsignedBigInteger('chuyenkhoa_id');
      $table->unsignedBigInteger('parent_id')->nullable()->commnent('Dòng cha trước đó');
      
      // Properties
      $table->unsignedBigInteger('vaokham_phong_id')->nullable()->commnent('Phòng');
      $table->timestamp('vaokham_ngay')->nullable()->commnent('Ngày vào Phòng');
      $table->integer('vaokham_stt')->nullable()->commnent('STT vào Phòng');
      $table->boolean('vaokham_uutien')->nullable()->commnent('Ưu tiên vào Phòng?');
      $table->unsignedBigInteger('vaokham_dieutri_bacsi_id')->nullable()->commnent('Bác sĩ trong phòng');
      $table->integer('vaokham_dieutri_xutri_e')->nullable()->commnent('Hình thức xử trí|#1: cấp toa cho về; #2: điều trị ngoại trú; #3: hẹn; #4: khác; #5: nhập viện; #6: chuyển viện; #7: tử vong; #8: tiến hành thủ thuật; #9: chuyển phòng khám; #10: chỉ định CLS; #11: bỏ về');
      $table->mediumText('vaokham_hoibenh')->nullable()->commnent('Hỏi bệnh');
      $table->integer('vaokham_ngaybenh_thumay')->nullable()->commnent('Ngày bệnh thứ mấy?');
      $table->boolean('vaokham_dachidinh_cls')->nullable()->commnent('Đã chỉ định CLS?');
      $table->boolean('vaokham_dachidinh_thuoc')->nullable()->commnent('Đã chỉ định Thuốc?');
      $table->boolean('vaokham_la_mantinh')->nullable()->commnent('Là bệnh mãn tính?');
      $table->boolean('vaokham_la_mantinh_landau')->nullable()->commnent('Là bệnh mãn tính lần đầu?');
      $table->integer('vaokham_trangthai_e')->nullable()->commnent('Trạng thái khám|#1: chờ khám; #2: đang chờ kết quả CLS; #3: Đã khám; #4: có kết quả CLS; #5: Khám sức khoẻ');

      $table->unsignedBigInteger('xutri_chuyenphongkham_phong_id')->nullable()->commnent('Chuyển đến phòng khám tiếp theo');
      $table->boolean('xutri_chuyenphongkham_uutien')->nullable()->commnent('Chuyển đến phòng khám tiếp theo có ưu tiên k?');

      $table->unsignedBigInteger('xutri_chuyennhapvien_khoa_id')->nullable()->commnent('Chuyển nhập viện khoa nào?');

      $table->unsignedBigInteger('xutri_chuyendieutringoaitru_khoa_id')->nullable()->commnent('Chuyển điều trị ngoại trú?');

      $table->boolean('dalap_benhan')->nullable()->commnent('Đã lập bệnh án?');
      
      // Log
      $table->unsignedBigInteger('dotkham_old_id');
      $table->unsignedBigInteger('chuyenkhoa_old_id');
      $table->unsignedBigInteger('thongtin_khambenh_old_id');
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
