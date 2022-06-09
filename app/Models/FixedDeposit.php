<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixedDeposit extends Model
{
    use HasFactory;
    // protected $primaryKey = 'id';
    // public $timestamps = false;

    protected $fillable = [
    'c_name',
    'account_no',
    'c_id',
    'branch_name',
    'branch_city',
    'amount',
    'interest_type',
    'year',
    'email',
    'phone',
    'nominee',
    'nominee_relation',
    'nominee_aadharNo',
    'pan',
    'terms'
    ];
}
