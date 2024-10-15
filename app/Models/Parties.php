<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parties extends Model
{
     protected $primaryKey = 'id';
     protected $fillable = [
          'party_name',
          'mobile_number',
          'email',
          'opening_balance',
          'party_type',
          'gst_number',
          'state',
          'billing_address',
          'shipping_address',
          'credit_period',
          'credit_limit',
    ];
    protected $hidden = ['created_at', 'updated_at'];
}


