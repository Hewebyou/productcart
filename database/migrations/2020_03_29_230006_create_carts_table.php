<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration {

    /**
     * @return void
     */
    public function up() {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('cookie');
            $table->integer('user_id')->unsigned()->nullable();
            $table->decimal('subtotal', 8, 2);
            $table->decimal('discount', 8, 2);
            $table->decimal('discout_percentage', 8, 2);
            $table->integer('coupon_id')->unsigned()->nullable();
            $table->decimal('shipping_charges', 8, 2);
            $table->decimal('net_total', 8, 2);
            $table->decimal('tax', 8, 2);
            $table->decimal('total', 8, 2);
            $table->decimal('round_off', 8, 2);
            $table->decimal('payable', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('carts');
    }

}
