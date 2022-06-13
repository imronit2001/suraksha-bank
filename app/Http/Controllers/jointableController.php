<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
class jointableController extends Controller
{
    function index(){
        $data = country::join('account_Opening', 'account_Opening.customer_id','=','customer.customer_id')
                        ->get(['account']);
    }
}
