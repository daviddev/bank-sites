<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_sites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->index();
            $table->enum('type', ['Muscle', 'Diet', 'CBD']);
            $table->string('brand_name')->nullable();
            $table->string('domain_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_city')->nullable();
            $table->string('company_state')->nullable();
            $table->string('company_zip')->nullable();
            $table->string('cs_phone')->nullable();
            $table->string('cs_address')->nullable();
            $table->string('cs_city')->nullable();
            $table->string('cs_state')->nullable();
            $table->string('cs_zip')->nullable();
            $table->string('cs_email')->unique();
            $table->string('returns_address')->nullable();
            $table->string('returns_city')->nullable();
            $table->string('returns_state')->nullable();
            $table->string('returns_zip')->nullable();
            $table->enum('offer_type', ['Straight Sale (SS)', 'Trial', 'Both']);
            $table->string('product_name')->nullable();
            $table->float('rebill_initial_product_price')->nullable();
            $table->float('rebill_initial_shipping_price')->nullable();
            $table->float('rebill_price')->nullable();
            $table->float('rebill_shipping_price')->nullable();
            $table->float('straight_sale_product_price')->nullable();
            $table->float('straight_sale_shipping_price')->nullable();
            $table->text('ingredients')->nullable();
            $table->enum('domain_reg', ['Namecheap', 'Godaddy']);
            $table->boolean('existing_artwork')->default(0);
            $table->boolean('has_hosting')->default(0);
            $table->string('host')->nullable();
            $table->string('ftp_sername')->nullable();
            $table->string('ftp_password')->nullable();
            $table->string('port')->nullable();
            $table->boolean('sftp')->default(0);
            $table->boolean('finished')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_sites');
    }
}
