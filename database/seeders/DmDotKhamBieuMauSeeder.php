<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DmDotKhamBieuMauSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $faker = \Faker\Factory::create();
    $id = 1;
    $list = [];

    // ----------- BV 01 -----------
    // $row = [
    //   'dotkham_bieumau_id' => $id,
    //   'benhnhan_id' => 1,
    //   'dotkham_id' => 1,
    //   'chuyenkhoa_id' => 1,
    //   'bieumau_id' => 40,
    //   'dotkham_bieumau_data' => '
    //   {
    //     "soyte": "",
    //     "benhvien": "",
    //     "lanthu": 3,
    //     "sovaovien": "A001",
    //     "nguoibenh_hoten": "Nguyễn Văn A",
    //     "nguoibenh_tuoi": 33,
    //     "nguoibenh_gioitinh": "Nam",
    //     "nguoibenh_diachi": "123 Nguyễn Văn Trỗi",
    //     "buong": "A01",
    //     "giuong": "3",
    //     "chandoan": "I10 tăng huyết áp",
    //     "yeucaukiemtra": "Kiểm tra gì đó...",
    //     "ngaylap_ngay": 15,
    //     "ngaylap_thang": 8,
    //     "ngaylap_nam": 2025,
    //     "bacsi_dieutri_hoten": "Nguyễn ABC",
    //     "bacsi_dieutri_chuky": "ABCDEF",
    //     "ketqua_mota_tonthuong": "tổn thương gì đó...",
    //     "ketqua_ketluan": "bình thường",
    //     "ketqua_hinh1": "base64",
    //     "ketqua_loidan": "ăn uống đủ chất",
    //     "ngayketqua_ngay": 16,
    //     "ngayketqua_thang": 08,
    //     "ngayketqua_nam": 2025,
    //     "bacsi_chuyenkhoa_hoten": "Trần Văn A",
    //     "bacsi_chuyenkhoa_chuky": "Chữ ký..."
    //   }
    //   ',
    //   'dotkham_bieumau_metadata' => '',
      
    //   'log_ngay_tao' => date('Y-m-d H:i:s'),
    //   'log_ngay_capnhat' => null,
    //   'log_ngay_xoa' => null,
    //   'log_nguoi_tao_id' => 1,
    //   'log_nguoi_capnhat_id' => null,
    //   'log_nguoi_xoa_id' => null,
    // ];
    // array_push($list, $row);
    // $id++;

    // Insert vào database
    DB::table('dm_bieumau')->insert($list);
  }
}
