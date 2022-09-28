<?php

namespace App\Http\Livewire\Admin\Member\Purchase;

use App\Http\Livewire\Tables\PurchaseTable;
use App\Models\Member\Purchase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{

    public $item_name;
    public $price;
    public $quantity;

    public User $user;

    protected function rules()
    {
        return [
            'item_name' => 'required',
            'price' => ['nullable'],
            'quantity' => ['nullable'],
        ];
    }

    protected $messages = [
        'item_name.required' => 'Please enter a name',
    ];

    public function save()
    {
        $validatedData = $this->validate();

        $purchase = Purchase::create([
            'item_name' => $this->item_name,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'user_id' => $this->user->id,
            'location_id' => Auth::user()->location->id
        ]);

        $this->reset('item_name');
        $this->reset('price');
        $this->reset('quantity');
        $this->dispatchBrowserEvent('memberUpdated');
        $this->emit('pg:eventRefresh-default');
    }

    public function mount($user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.admin.member.purchase.create');
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
