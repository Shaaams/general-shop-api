<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable =[
        'street_name', 'street_number', 'city',
        'state', 'country', 'post_code','shipping_address', 'billing_address'

    ];

    //this Address belongsto one user
    public function user()
    {
        return $this->belongsTo(User::class);
    }



}
