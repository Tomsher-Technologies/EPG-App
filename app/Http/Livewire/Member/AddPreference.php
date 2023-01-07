<?php

namespace App\Http\Livewire\Member;

use App\Models\Location\Location;
use App\Models\Member\Preference;
use Livewire\Component;

class AddPreference extends Component
{

    public $locations;

    public $location;
    public $pref_text;


    protected function rules()
    {
        return [
            'location' => 'required',
            'pref_text' => ['required', 'min:5'],
        ];
    }

    protected $messages = [
        'location.required' => 'Please select a location',
        'pref_text.required' => 'Please enter your prefrence',
        'pref_text.min' => 'Please elaborate your preference',
    ];

    public function mount()
    {
        $this->locations = Location::all();
    }

    public function save()
    {
        $validatedData = $this->validate();

        $preference = Preference::create([
            'location_id' => $this->location,
            'preference' => $this->pref_text,
        ]);

        $this->reset('location_id');
        $this->reset('pref_text');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.member.add-preference');
    }
}
