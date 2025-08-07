<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AlterTableXuatChiTiet extends Migration
{
  const TABLE_NAME = 'xuat_chitiet';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table(static::TABLE_NAME, function (Blueprint $table) {
      $table->unsignedBigInteger('nhap_chitiet_id')->nullable()->after('dm_sanpham_id');
      $table->foreign('nhap_chitiet_id')->references('nhap_chitiet_id')->on('nhap_chitiet');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table(static::TABLE_NAME, function (Blueprint $table) {
      $table->dropColumn('nhap_chitiet_id');
      $table->dropForeign('nhap_chitiet_id');
    });
  }
}
