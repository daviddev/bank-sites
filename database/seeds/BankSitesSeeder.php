<?php

use Illuminate\Database\Seeder;
use App\BankSite;

class BankSitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BankSite::truncate();
        BankSite::create([
        	'customer_id' => 2,
			'type' => 'Muscle',
			'brand_name' => 'brand name',
			'domain_name' => 'domain name',
			'company_name' => 'company name',
			'company_address' => 'company address',
			'company_city' => 'company city',
			'company_state' => 'company state',
			'company_zip' => 111,
			'cs_phone' => 111111111,
			'cs_address' => 'cs address',
			'cs_city' => 'cs city',
			'cs_state' => 'cs state',
			'cs_zip' => 111,
			'cs_email' => 'cs-email@gmail.com',
			'returns_address' => 'returns address',
			'returns_city' => 'returns city',
			'returns_state' => 'returns state',
			'returns_zip' => 111,
			'offer_type' => 'Trial',
			'product_name' => 'product name',
			'rebill_initial_product_price' => 111,
			'rebill_initial_shipping_price' => 111,
			'rebill_price' => 111,
			'rebill_shipping_price' => 111,
			'straight_sale_product_price' => 111,
			'straight_sale_shipping_price' => 111,
			'ingredients' => 'ingredients',
			'domain_reg' => 'Namecheap',
			'existing_artwork' => 1,
			'has_hosting' => 1,
			'host' => 1,
			'ftp_sername' => 'ftp sername',
			'ftp_password' => 'ftp password',
			'port' => 4200,
			'sftp' => 1,
			'finished' => 1
		]);
    }
}