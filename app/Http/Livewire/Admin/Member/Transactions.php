<?php

namespace App\Http\Livewire\Admin\Member;

use App\Models\Location\Location;
use Livewire\Component;

class Transactions extends Component
{
    public $transactions;
    public $allTransactions;

    public $locations;
    public $location;

    public function changeLocation()
    {
        $this->render();
    }

    public function mount($transactions)
    {
        $this->allTransactions = $transactions;
        $this->transactions = $transactions;
        $this->locations = Location::all();
    }

    public function render()
    {
        if ((int)$this->location !== 0) {
            $this->transactions = $this->allTransactions->where('location_id', (int)$this->location);
        } else {
            $this->transactions = $this->allTransactions;
        }
        return view('livewire.admin.member.transactions');
    }
}
