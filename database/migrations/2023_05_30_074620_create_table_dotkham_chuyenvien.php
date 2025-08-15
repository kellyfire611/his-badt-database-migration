<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDotkhamChuyenVien extends Migration
{
  const TABLE_NAME = 'dotkham_chuyenvien';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dotkham_chuyenvien_id');

      // Foreign
      $table->unsignedBigInteger('benhnhan_id');
      $table->unsignedBigInteger('dotkham_id');
      $table->unsignedBigInteger('noichuyenden_id');
      $table->unsignedBigInteger('phieuthuphi_id');
      $table->unsignedBigInteger('bacsi_id');

      // Properties
      $table->string('dotkham_chuyenvien_sogiay')->comment('Số giấy chuyển viện');
      $table->mediumText('dotkham_chuyenvien_dauhieulamsang')->comment('Dấu hiệu lâm sàng');
      $table->mediumText('dotkham_chuyenvien_lydo')->comment('Lý do chuyển viện');
      $table->mediumText('dotkham_chuyenvien_tinhtrang')->comment('Tình trạng chuyển viện');
      $table->mediumText('dotkham_chuyenvien_xetnghiemdalam')->comment('Các xét nghiệm đã làm');
      $table->mediumText('dotkham_chuyenvien_thuocdadung')->comment('Các xét nghiệm đã làm');
      $table->integer('dotkham_chuyenvien_hinhthuc_e')->comment('Hình thức chuyển viện|#1: Chuyển tuyến trên; #2: Chuyển tuyến dưới; #3: Chuyển chuyên khoa; #4: Chuyển theo yêu cầu; #5: Chuyển tuyến trên');
      $table->timestamp('dotkham_chuyenvien_thoigian')->comment('Thời gian chuyển viện');
      $table->mediumText('dotkham_chuyenvien_nguoichuyen')->comment('Người chuyển');
      $table->mediumText('dotkham_chuyenvien_phuongtien')->comment('Phương tiện');
      $table->decimal('dotkham_chuyenvien_sokm', 20, 2)->comment('Số KM chuyển viện');
      $table->decimal('dotkham_chuyenvien_sotien', 20, 2)->comment('Số tiền chuyển viện');
      $table->decimal('dotkham_chuyenvien_sotien_bhyt_thanhtoan', 20, 2)->comment('Số tiền bhyt thanh toán chuyển viện');
      $table->decimal('dotkham_chuyenvien_heso_vanchuyen', 20, 2)->comment('Hệ số vận chuyển');
      $table->decimal('dotkham_chuyenvien_dongia_vanchuyen', 20, 2)->comment('Đơn giá vận chuyển');
      $table->boolean('dotkham_chuyenvien_latraituyen')->comment('Là trái tuyến?');
      $table->mediumText('dotkham_chuyenvien_huongdieutri')->comment('Hướng điều trị');
      $table->mediumText('dotkham_chuyenvien_thuthuat')->comment('Thủ thuật đã làm');
      $table->timestamp('dotkham_chuyenvien_thuthuat_thoigian_batdau')->comment('Thời gian bắt đầu thủ thuật');
      $table->timestamp('dotkham_chuyenvien_thuthuat_thoigian_ketthuc')->comment('Thời gian bắt đầu kết thúc');
      $table->boolean('dotkham_chuyenvien_cogiatri_motnam')->comment('Có giá trị 1 năm hay không?');

      $table->string('dotkham_chuyentuyen_sogiay')->comment('Số giấy chuyển tuyến');
      
      // Log
      $table->unsignedBigInteger('dotkham_old_id');
      $table->timestamp('log_ngay_tao')->comment('Thời điểm tạo')->useCurrent();
      $table->timestamp('log_ngay_capnhat')->comment('Thời điểm cập nhật')->nullable();
      $table->timestamp('log_ngay_xoa')->comment('Thời điểm xóa')->nullable();
      $table->unsignedBigInteger('log_nguoi_tao_id')->comment('Người tạo')->nullable();
      $table->unsignedBigInteger('log_nguoi_capnhat_id')->comment('Người cập nhật')->nullable();
      $table->unsignedBigInteger('log_nguoi_xoa_id')->comment('Người xóa')->nullable();
      //$table->foreign('log_nguoi_tao_id')->references('user_id')->on('users');
      //$table->foreign('log_nguoi_capnhat_id')->references('user_id')->on('users');
      //$table->foreign('log_nguoi_xoa_id')->references('user_id')->on('users');
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
