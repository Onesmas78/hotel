<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Currency;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('currency_name');
            $table->string('currency_symbol');
            $table->string('currency_code');
            $table->timestamps();
        });

        Currency::create([
            'currency_name' => 'Kenyan Shilling',
            'currency_symbol' => 'Ksh',
            'currency_code' => 'KES'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currencies');
    }
}
