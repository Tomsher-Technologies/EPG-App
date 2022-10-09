<?php

namespace App\Http\Livewire\Admin\AdminUsers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Bouncer;

class Create extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    protected function rules()
    {
        return [
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => 'required|min:6|required_with:password_confirmation|same:password_confirmation',
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
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'status' => 1,
            'location_id' => 0,
            'password' => Hash::make($this->password)
        ]);

        Bouncer::assign('superadmin')->to($user);

        $this->reset('name');
        $this->reset('email');
        $this->reset('password');
        $this->reset('password_confirmation');
        $this->dispatchBrowserEvent('memberUpdated');
    }

    public function render()
    {
        return view('livewire.admin.admin-users.create');
    }
}
