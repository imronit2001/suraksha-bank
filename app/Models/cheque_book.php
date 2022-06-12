<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cheque_book extends Model
{
    use HasFactory;
    protected $fillable = [
        'accountNo',
        'accountType',
        'branchName',
        'no_of_chequeBoook',
        'no_of_checkleaves',
        'address',
    ];
}
