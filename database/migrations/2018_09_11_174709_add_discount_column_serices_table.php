<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDiscountColumnSericesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('business_services', function (Blueprint $table) {
      $table->float('discount');
      $table->enum('discount_type', ['percent', 'fixed'])->after('discount');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('business_services', function (Blueprint $table) {
      $table->dropColumn(['discount', 'discount_type']);
    });
  }
}
