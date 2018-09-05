<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BankSiteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'customer_id' => 'required',
            'type' => 'required',
            'brand_name' => 'required',
            'domain_name' => 'required',
            'company_name' => 'required',
            'company_address' => 'required',
            'company_city' => 'required',
            'company_state' => 'required',
            'company_zip' => 'required',
            'cs_phone' => 'required',
            'cs_address' => 'required',
            'cs_city' => 'required',
            'cs_state' => 'required',
            'cs_zip' => 'required',
            'cs_email' => 'required',
            'returns_address' => 'required',
            'returns_city' => 'required',
            'returns_state' => 'required',
            'returns_zip' => 'required',
            'offer_type' => 'required',
            'product_name' => 'required',
            'straight_sale_product_price' => 'required_if:offer_type,==,Straight Sale (SS)',
            'straight_sale_shipping_price' => 'required_if:offer_type,==,Straight Sale (SS)',
            'ingredients' => 'required',
            'domain_reg' => 'required',
            'existing_artwork' => 'required',
            'has_hosting' => 'required',
        ];
    }
}