<?php

namespace App\Http\Livewire\Admin\Location;

use App\Models\Location\Location;
use Livewire\Component;

class Edit extends Component
{
    public Location $location;

    protected function rules()
    {
        return [
            'location.name' => ['required', 'unique:locations,name,' . $this->location->id],
            'location.status' => ['required'],
        ];
    }

    protected $messages = [
        'location.name.required' => 'Please enter a name.',
        'location.name.unique' => 'This name already exist.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($location)
    {
        $this->location = $location;
    }

    public function save()
    {
        $validatedData = $this->validate();
        $this->location->save();
        $this->dispatchBrowserEvent('memberUpdated');
    }

    public function render()
    {
        return view('livewire.admin.location.edit');
    }
}
