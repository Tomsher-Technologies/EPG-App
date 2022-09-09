<?php

namespace App\Http\Livewire\Location\Receptionist;

use App\Models\Location\Location;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Edit extends Component
{

    public $allLocation;
    public User $receptionist;

    public $password;
    public $password_confirmation;

    protected function rules()
    {
        return [
            'receptionist.name' => 'required',
            'receptionist.email' => ['required', 'email', 'unique:users,email,' . $this->receptionist->id],
            'receptionist.location_id' => 'required',
            'receptionist.status' => 'required',
            'password' => 'nullable|min:6|required_with:password_confirmation|same:password_confirmation',
        ];
    }

    protected $messages = [
        'receptionist.name.required' => 'Please enter a name',
        'receptionist.email.required' => 'The email address cannot be empty.',
        'receptionist.email.email' => 'The email address format is not valid.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();
        if( $this->password ){
            $this->receptionist->password = Hash::make($this->password);
        }
        $this->receptionist->save();
        $this->reset('password');
        $this->reset('password_confirmation');
        $this->dispatchBrowserEvent('memberUpdated');
    }

    public function mount($receptionist)
    {
        $this->allLocation = Location::whereStatus(true)->get();
        $this->receptionist = $receptionist;
    }

    public function render()
    {
        return view('livewire.location.receptionist.edit');
    }
}
