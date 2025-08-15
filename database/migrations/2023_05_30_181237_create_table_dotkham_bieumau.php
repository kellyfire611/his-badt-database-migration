<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableDotkhamBieuMau extends Migration
{
  const TABLE_NAME = 'dotkham_bieumau';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      // Primary key
      $table->bigIncrements('dotkham_bieumau_id');

      // Foreign
      $table->unsignedBigInteger('benhnhan_id');
      $table->unsignedBigInteger('dotkham_id');
      $table->unsignedBigInteger('chuyenkhoa_id');
      $table->unsignedBigInteger('bieumau_id');

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

      $table->json('dotkham_bieumau_metadata');

      // Log
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
