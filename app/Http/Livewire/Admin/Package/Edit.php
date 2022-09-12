<?php

namespace App\Http\Livewire\Admin\Package;

use App\Models\Location\Package;
use Livewire\Component;

class Edit extends Component
{

    public Package $package;

    protected function rules()
    {
        return [
            'package.name' => ['required', 'unique:packages,name,' . $this->package->id],
            'package.price' => ['required', 'integer'],
            'package.status' => ['required'],
        ];
    }

    protected $messages = [
        'package.price.required' => 'Please enter a price.',
        'package.price.integer' => 'Please enter a valid price.',
        'package.name.required' => 'Please enter a name.',
        'package.name.unique' => 'This name already exist.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();
        $this->package->save();
        $this->dispatchBrowserEvent('memberUpdated');
    }

    public function mount($package)
    {
        $this->package = $package;
    }

    public function render()
    {
        return view('livewire.admin.package.edit');
    }
}
