<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCompanySettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('company_email');
            $table->string('company_phone');
            $table->string('logo')->nullable();
            $table->text('address');
            $table->string('website');
            $table->string('timezone');
            $table->string('locale');
            $table->decimal('latitude', 10,8);
            $table->decimal('longitude', 11,8);
            $table->unsignedInteger('currency_id');
            $table->foreign('currency_id')->references('id')->on('currencies')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        $data = [
            'company_name' => 'Stanjo Karen Suites',
            'company_email' => 'info@stanjokarensuites.com',
            'company_phone' => '0733960752',
            'address' => 'Nairobi, Kenya',
            'website' => 'http://stanjokarensuites.com',
            'locale' => 'en',
            'timezone' => 'Africa/Nairobi',
            'latitude' => '-1.349251',
            'longitude' => '36.747062',
            'currency_id' => '1'
        ];

        DB::table('company_settings')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_settings');
    }
}
