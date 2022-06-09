<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use App\Models\FixedDeposit;

use Livewire\Component;

class FormHandle extends Component
{
    use WithFileUploads;

    public $c_name;
    public $account_no;
    public $c_id;
    public $branch_name;
    public $branch_city;
    public $amount;
    public $interest_type;
    public $year;
    public $email;
    public $phone;
    public $nominee;
    public $nominee_relation;
    public $nominee_aadharNo;
    public $pan;
    public $terms;

    public $totalSteps = 3;
    public $currentStep = 1;
    public function render()
    {
        return view('livewire.form-handle');
    }
}
