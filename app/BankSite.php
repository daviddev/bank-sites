<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankSite extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id',
		'type',
		'brand_name',
		'domain_name',
		'company_name',
		'company_address',
		'company_city',
		'company_state',
		'company_zip',
		'cs_phone',
		'cs_address',
		'cs_city',
		'cs_state',
		'cs_zip',
		'cs_email',
		'returns_address',
		'returns_city',
		'returns_state',
		'returns_zip',
		'offer_type',
		'product_name',
		'rebill_initial_product_price',
		'rebill_initial_shipping_price',
		'rebill_price',
		'rebill_shipping_price',
		'straight_sale_product_price',
		'straight_sale_shipping_price',
		'ingredients',
		'domain_reg',
		'existing_artwork',
		'has_hosting',
		'host',
		'ftp_sername',
		'ftp_password',
		'port',
		'sftp',
		'finished'
    ];

    /**
     * Get bank sites
     *
     * @param integer $customerId
     * @return collection
     */
    public function bankSites($customerId = null)
    {
    	if ($customerId) {
        	return $this->where('customer_id', $customerId)->get();
    	} else {
    		return $this->all();
    	}
    }
} 
