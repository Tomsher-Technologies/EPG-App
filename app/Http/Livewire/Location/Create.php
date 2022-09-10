<?php

namespace App\Http\Livewire\Location;

use App\Models\Location\Location;
use Livewire\Component;

class Create extends Component
{

    public $name;

    protected function rules()
    {
        return [
            'name' => ['required', 'unique:locations,name'],
        ];
    }

    protected $messages = [
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
        Location::create([
            'name' => $this->name,
            'status' => 1
        ]);
        $this->reset('name');
        $this->dispatchBrowserEvent('memberUpdated');
    }

    public function render()
    {
        return view('livewire.location.create');
    }
}
