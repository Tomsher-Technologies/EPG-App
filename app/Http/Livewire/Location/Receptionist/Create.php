<?php

namespace App\Http\Livewire\Location\Receptionist;

use App\Models\Location\Location;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{

    public $allLocation;
    public $location;

    // Model data
    public $name;
    public $email;
    public $password;
    public $password_confirmation;


    protected function rules()
    {
        return [
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
        ];
    }

    protected $messages = [
        'name.required' => 'Please enter a name',
        'email.required' => 'The email address cannot be empty.',
        'phone.required' => 'The phone number cannot be empty.',
        'email.email' => 'The email address format is not valid.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'status' => 1,
            'location_id' => $this->location,
            'password' => Hash::make($this->password)
        ]);
        $this->reset('name');
        $this->reset('email');
        $this->reset('password');
        $this->reset('location');
        $this->reset('password_confirmation');
        $this->dispatchBrowserEvent('memberUpdated');
    }

    public function mount($location_id = 4)
    {
        $this->allLocation = Location::whereStatus(true)->get();
        $this->location = $location_id;
    }

    public function render()
    {
        return view('livewire.location.receptionist.create');
    }
}
