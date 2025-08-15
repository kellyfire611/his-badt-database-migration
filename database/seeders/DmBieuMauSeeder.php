<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DmBieuMauSeeder extends Seeder
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
    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '01/BV1',
      'bieumau_ten' => 'Bệnh án Nội khoa',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_01_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '02/BV1',
      'bieumau_ten' => 'Bệnh án Nhi khoa',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_02_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '03/BV1',
      'bieumau_ten' => 'Bệnh án Truyền nhiễm',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_03_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '04/BV1',
      'bieumau_ten' => 'Bệnh án Phụ khoa',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_04_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '05/BV1',
      'bieumau_ten' => 'Bệnh án Sản khoa',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_05_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '06/BV1',
      'bieumau_ten' => 'Bệnh án Sơ sinh',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_06_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '07/BV1',
      'bieumau_ten' => 'Bệnh án Tâm thần',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_07_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '08/BV1',
      'bieumau_ten' => 'Bệnh án Da liễu',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_08_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '09/BV1',
      'bieumau_ten' => 'Bệnh án Huyết học-Truyền máu',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_09_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '10/BV1',
      'bieumau_ten' => 'Bệnh án Ngoại khoa',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_10_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '11/BV1',
      'bieumau_ten' => 'Bệnh án Bỏng',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_10_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '12/BV1',
      'bieumau_ten' => 'Bệnh án Ung bướu',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_12_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '13/BV1',
      'bieumau_ten' => 'Bệnh án Răng Hàm Mặt',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_13_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '14/BV1',
      'bieumau_ten' => 'Bệnh án Tai Mũi Họng',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_14_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '15/BV1',
      'bieumau_ten' => 'Bệnh án Ngoại trú chung',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_15_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '16/BV1',
      'bieumau_ten' => 'Bệnh án Ngoại trú Răng Hàm Mặt',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_16_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '17/BV1',
      'bieumau_ten' => 'Bệnh án dùng cho tuyến xã/phường',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_17_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '18/BV1',
      'bieumau_ten' => 'Bệnh án Nội trú Y học cổ truyền',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_18_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '19/BV1',
      'bieumau_ten' => 'Bệnh án Ngoại trú Y học cổ truyền',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_19_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '20/BV1',
      'bieumau_ten' => 'Bệnh án Nội trú Nhi Y học cổ truyền',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_20_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '21/BV1',
      'bieumau_ten' => 'Bệnh án Mắt (chấn thương)',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_21_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '22/BV1',
      'bieumau_ten' => 'Bệnh án Mắt (Bán phần trước)',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_22_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '23/BV1',
      'bieumau_ten' => 'Bệnh án Mắt (Đáy mắt)',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_23_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '24/BV1',
      'bieumau_ten' => 'Bệnh án Mắt (Glocom)',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_24_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '25/BV1',
      'bieumau_ten' => 'Bệnh án Mắt (Lác)',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_25_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '26/BV1',
      'bieumau_ten' => 'Bệnh án Mắt trẻ em',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_26_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '27/BV1',
      'bieumau_ten' => 'Bệnh án phục hồi chức năng',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_27_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '28/BV1',
      'bieumau_ten' => 'Bệnh án phục hồi chức năng nhi',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_28_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '29/BV1',
      'bieumau_ten' => 'Bệnh án ngoại trú phục hồi chức năng',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV01_29_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    // ----------- BV 02 -----------
    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '01/BV2',
      'bieumau_ten' => 'Giấy cam kết chấp thuận phẫu thuật, thủ thuật và gây mê hồi sức',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_01_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '02/BV2',
      'bieumau_ten' => 'Giấy chứng nhận phẫu thuật',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_02_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '03/BV2',
      'bieumau_ten' => 'Giấy khám/chữa bệnh theo yêu cầu',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_03_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '04/BV2',
      'bieumau_ten' => 'Phiếu khám chuyên khoa',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_04_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '05/BV2',
      'bieumau_ten' => 'Phiếu gây mê hồi sức',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_05_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '06/BV2',
      'bieumau_ten' => 'Phiếu phẫu thuật/ thủ thuật',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_06_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '07/BV2',
      'bieumau_ten' => 'Phiếu theo dõi truyền dịch',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_07_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '08/BV2',
      'bieumau_ten' => 'Phiếu chiếu/chụp X-quang',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_08_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '09/BV2',
      'bieumau_ten' => 'Phiếu chụp cắt lớp vi tính',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_09_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '10/BV2',
      'bieumau_ten' => 'Phiếu chụp cộng hưởng từ',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_10_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '11/BV2',
      'bieumau_ten' => 'Phiếu siêu âm',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_11_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '12/BV2',
      'bieumau_ten' => 'Phiếu điện tim',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_12_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '13/BV2',
      'bieumau_ten' => 'Phiếu điện não',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_13_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '14/BV2',
      'bieumau_ten' => 'Phiếu nội soi',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_14_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '15/BV2',
      'bieumau_ten' => 'Phiếu đo chức năng hô hấp',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_15_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '16/BV2',
      'bieumau_ten' => 'Phiếu xét nghiệm (chung)',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_16_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '17/BV2',
      'bieumau_ten' => 'Phiếu xét nghiệm Huyết học',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_17_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '18/BV2',
      'bieumau_ten' => 'Phiếu xét nghiệm huyết - tuỷ đồ',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_18_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '19/BV2',
      'bieumau_ten' => 'Phiếu xét nghiệm chẩn đoán rối loạn đông cầm máu',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_19_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '20/BV2',
      'bieumau_ten' => 'Phiếu xét nghiệm sinh thiết tuỷ xương',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_20_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '21/BV2',
      'bieumau_ten' => 'Phiếu xét nghiệm nước dịch',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_21_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '22/BV2',
      'bieumau_ten' => 'Phiếu xét nghiệm hoá sinh máu',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_22_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '23/BV2',
      'bieumau_ten' => 'Phiếu xét nghiệm hoá sinh nước tiểu, phân, dịch chọc dò',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_23_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '24/BV2',
      'bieumau_ten' => 'Phiếu xét nghiệm vi sinh',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_24_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '25/BV2',
      'bieumau_ten' => 'Phiếu xét nghiệm giải phẫu bệnh sinh thiết',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_25_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '26/BV2',
      'bieumau_ten' => 'Phiếu xét nghiệm giải phẫu bệnh khám nghiệm tử thi',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_26_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '27/BV2',
      'bieumau_ten' => 'Trích biên bản hội chẩn',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_27_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '28/BV2',
      'bieumau_ten' => 'Trích biên bản kiểm thảo tử vong',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_28_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '29/BV2',
      'bieumau_ten' => 'Phiếu khám bệnh vào viện (chung)',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_29_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '30/BV2',
      'bieumau_ten' => 'Phiếu phẫu thuật ghép giác mạc',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_30_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '31/BV2',
      'bieumau_ten' => 'Phiếu phẫu thuật bề mặt nhãn cầu',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_31_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '32/BV2',
      'bieumau_ten' => 'Phiếu phẫu thuật Glocom',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_32_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '33/BV2',
      'bieumau_ten' => 'Phiếu phẫu thuật lác',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_33_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '34/BV2',
      'bieumau_ten' => 'Phiếu phẫu thuật túi lệ',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_34_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '35/BV2',
      'bieumau_ten' => 'Phiếu phẫu thuật sụp mi, mộng, thể thủy tinh, Sapejko',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_35_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '36/BV2',
      'bieumau_ten' => 'Phiếu theo dõi điều trị',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_36_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '37/BV2',
      'bieumau_ten' => 'Phiếu chăm sóc cấp 1',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_37_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '38/BV2',
      'bieumau_ten' => 'Phiếu chăm sóc cấp 2',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_38_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '39/BV2',
      'bieumau_ten' => 'Phiếu nhận định phân loại người bệnh tại khoa cấp cứu',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_39_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '40/BV2',
      'bieumau_ten' => 'Giấy cung cấp thông tin và cam kết chung về nhập viện nội trú',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_40_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '41/BV2',
      'bieumau_ten' => 'Giấy cam kết từ chối sử dụng dịch vụ khám bệnh, chữa bệnh',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_41_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '42/BV2',
      'bieumau_ten' => 'Phiếu cung cấp thông tin người bệnh tại khoa hồi sức tích cực',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_42_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '43/BV2',
      'bieumau_ten' => 'Phiếu bàn giao người bệnh chuyển khoa (Dành cho bác sỹ)',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_43_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '44/BV2',
      'bieumau_ten' => 'Phiếu bàn giao người bệnh chuyển khoa (Dành cho điều dưỡng)',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_44_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '45/BV2',
      'bieumau_ten' => 'Giấy cam kết chuyển cơ sở khám bệnh, chữa bệnh',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_45_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '46/BV2',
      'bieumau_ten' => 'Giấy cam kết ra viện không theo chỉ định của bác sỹ (khi chưa kết thúc việc chữa bệnh)',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_46_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '47/BV2',
      'bieumau_ten' => 'Biên bản kiểm thảo tử vong',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_47_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '48/BV2',
      'bieumau_ten' => 'Giấy cam kết chấp thuận điều trị bằng hóa trị - xạ trị',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_48_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '49/BV2',
      'bieumau_ten' => 'Giấy cam kết chấp thuận điều trị bằng xạ trị',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_49_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '50/BV2',
      'bieumau_ten' => 'Phiếu điều trị trẻ sơ sinh sau sinh',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_50_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '51/BV2',
      'bieumau_ten' => 'Phiếu khám thai',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_51_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '52/BV2',
      'bieumau_ten' => 'Bản tóm tắt hồ sơ bệnh án',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_52_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '53/BV2',
      'bieumau_ten' => 'Giấy đề nghị cung cấp bản tóm tắt hồ sơ bệnh án/tài liệu liên quan',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_53_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '54/BV2',
      'bieumau_ten' => 'Hướng dẫn ghi chép bệnh án nội trú y học cổ truyền và bệnh án nội trú nhi y học cổ truyền',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_54_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    $row = [
      'dm_bieumau_id' => $id,
      'bieumau_ma' => '55/BV2',
      'bieumau_ten' => 'Hướng dẫn ghi chép bệnh án ngoại trú y học cổ truyền',
      'bieumau_diengiai' => '',
      'bieumau_url' => '',
      'bieumau_component' => 'BV02_55_Page',
      
      'log_ngay_tao' => date('Y-m-d H:i:s'),
      'log_ngay_capnhat' => null,
      'log_ngay_xoa' => null,
      'log_nguoi_tao_id' => 1,
      'log_nguoi_capnhat_id' => null,
      'log_nguoi_xoa_id' => null,
    ];
    array_push($list, $row);
    $id++;

    // Insert vào database
    DB::table('dm_bieumau')->insert($list);
  }
}
