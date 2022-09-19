<?php

namespace App\Http\Livewire\Admin\Package;

use App\Models\Location\Package;
use Livewire\Component;

class Create extends Component
{

    public $name;
    public $price;
    public $validity;

    protected function rules()
    {
        return [
            'name' => ['required', 'unique:packages,name'],
            'price' => ['required', 'integer'],
            'validity' => ['required', 'integer'],
        ];
    }

    protected $messages = [
        'price.required' => 'Please enter a price.',
        'validity.required' => 'Please enter a validity.',
        'price.integer' => 'Please enter a valid price.',
        'name.required' => 'Please enter a name.',
        'name.unique' => 'This name already exist.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();
        Package::create([
            'name' => $this->name,
            'price' => $this->price,
            'validity' => $this->validity,
            'status' => 1
        ]);
        $this->reset('name');
        $this->reset('price');
        $this->reset('validity');
        $this->dispatchBrowserEvent('memberUpdated');
    }

    public function render()
    {
        return view('livewire.admin.package.create');
    }
}
