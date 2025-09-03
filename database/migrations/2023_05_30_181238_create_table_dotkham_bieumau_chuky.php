<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDotkhamBieuMauChuKy extends Migration
{
  const TABLE_NAME = 'dotkham_bieumau_chuky';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dotkham_bieumau_chuky_id');

      // Foreign
      $table->unsignedBigInteger('dotkham_bieumau_id');

      // Properties
      /*
      Ví dụ mẫu bệnh án 01/BV-01
      {
        "ngayIn": "2025-08-15",
        "chuky": [
          {
            "vitri_ky": {
              "key": "giamdoc",
              "name": "Giám đốc bệnh viện",
            },
            "ngayky": "2025-08-15",
            "nguoiky_id": 1,
            "nguoiky_hoten": "Nguyễn Văn A",
            "nguoiky_chucvu": "Bác sĩ",
            "nguoiky_chucdanh": "Bác sĩ chuyên khoa",
            "nguoiky_chuky_so": "chukyso_01",
            "nguoiky_chuky_dientu": "chukyso_01.png / base64"
          },
          {
            "vitri_ky": {
              "key": "truongkhoa",
              "name": "Trưởng khoa",
            },
            "ngayky": "2025-08-15",
            "nguoiky_id": 2,
            "nguoiky_hoten": "Nguyễn Văn B",
            "nguoiky_chucvu": "Bác sĩ",
            "nguoiky_chucdanh": "Bác sĩ chuyên khoa",
            "nguoiky_chuky_so": "chukyso_01",
            "nguoiky_chuky_dientu": "chukyso_01.png / base64"
          },
          {
            "vitri_ky": {
              "key": "bacsy_lambenhan",
              "name": "Bác sĩ làm bệnh án",
            },
            "ngayky": "2025-08-15",
            "nguoiky_id": 3,
            "nguoiky_hoten": "Nguyễn Văn C",
            "nguoiky_chucvu": "Bác sĩ",
            "nguoiky_chucdanh": "Bác sĩ chuyên khoa",
            "nguoiky_chuky_so": "chukyso_01",
            "nguoiky_chuky_dientu": "chukyso_01.png / base64"
          },
          {
            "vitri_ky": {
              "key": "bacsy_dieutri",
              "name": "Bác sĩ điều trị",
            },
            "ngayky": "2025-08-15",
            "nguoiky_id": 4,
            "nguoiky_hoten": "Nguyễn Văn D",
            "nguoiky_chucvu": "Bác sĩ",
            "nguoiky_chucdanh": "Bác sĩ chuyên khoa",
            "nguoiky_chuky_so": "chukyso_01",
            "nguoiky_chuky_dientu": "chukyso_01.png / base64"
          },
          {
            "vitri_ky": {
              "key": "nguoigiao_hoso",
              "name": "Người giao hồ sơ",
            },
            "ngayky": "2025-08-15",
            "nguoiky_id": 5,
            "nguoiky_hoten": "Nguyễn Văn E",
            "nguoiky_chucvu": "Bác sĩ",
            "nguoiky_chucdanh": "Bác sĩ chuyên khoa",
            "nguoiky_chuky_so": "chukyso_01",
            "nguoiky_chuky_dientu": "chukyso_01.png / base64"
          },
          {
            "vitri_ky": {
              "key": "nguoinhan_hoso",
              "name": "Người nhận hồ sơ",
            },
            "ngayky": "2025-08-15",
            "nguoiky_id": 5,
            "nguoiky_hoten": "Nguyễn Văn E",
            "nguoiky_chucvu": "Bác sĩ",
            "nguoiky_chucdanh": "Bác sĩ chuyên khoa",
            "nguoiky_chuky_so": "chukyso_01",
            "nguoiky_chuky_dientu": "chukyso_01.png / base64"
          },
        ],
        "styles": [
          {
            "key": "chuky_giamdoc_benhvien",
            "fontSize": 12
          },
          {
            "key": "chuky_truongkhoa",
            "fontSize": 18
          },
        ]
      }

      FRONTEND
      http://ecosystem-g2b.local/benhvien/benh-an-dien-tu/{dotkham_id}}
      => người bệnh có thể xem biểu mẫu này trong bệnh án điện tử của mình
      => và ký số/ký điện tử

      BACKEND: organization root
      http://ecosystem-g2b.local/benhnhan/root/benh-an-dien-tu/{dotkham_id}/bieu-mau/{bieumau_id}
      => nhân viên y tế có thể xem biểu mẫu này trong bệnh án điện tử của người bệnh
      => và ký số/ký điện tử

      Vị trí ký, của ai thì ký người đó, người khác không được xoá.
      */

      $table->string('dotkham_bieumau_guid', 36)->default(DB::raw('gen_random_uuid()'));
      
      $table->longText('dotkham_bieumau_chuky_vitri_key')->nullable()->comment('Vị trí ký');
      $table->longText('dotkham_bieumau_chuky_vitri_name')->nullable()->comment('Tên vị trí ký');
      $table->longText('dotkham_bieumau_chuky_diadiem')->nullable()->comment('Địa điểm ký');
      $table->timestamp('dotkham_bieumau_chuky_ngay')->nullable()->comment('Ngày ký');
      $table->string('dotkham_bieumau_chuky_nguoiky_username', 500)->nullable()->comment('Người ký');
      $table->longText('dotkham_bieumau_chuky_nguoiky_hoten')->nullable()->comment('Người ký họ tên');
      $table->longText('dotkham_bieumau_chuky_nguoiky_chucvu')->nullable()->comment('Người ký chức vụ');
      $table->longText('dotkham_bieumau_chuky_nguoiky_chucdanh')->nullable()->comment('Người ký chức danh');
      $table->longText('dotkham_bieumau_chuky_dientu')->nullable()->comment('Chữ ký điện tử');

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
      $table->string('guid', 36)->default(DB::raw('gen_random_uuid()'));
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
