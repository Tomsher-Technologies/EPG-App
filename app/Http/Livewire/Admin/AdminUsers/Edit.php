<?php

namespace App\Http\Livewire\Admin\AdminUsers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Edit extends Component
{
    public User $user;

    public $password;
    public $password_confirmation;

    protected function rules()
    {
        return [
            'user.name' => 'required',
            'user.email' => ['required', 'email', 'unique:users,email,' . $this->user->id],
            'user.location_id' => 'required',
            'user.status' => 'required',
            'password' => 'nullable|min:6|required_with:password_confirmation|same:password_confirmation',
        ];
    }

    protected $messages = [
        'user.name.required' => 'Please enter a name',
        'user.email.required' => 'The email address cannot be empty.',
        'user.email.email' => 'The email address format is not valid.',
    ];

    public function mount($user)
    {
        $this->user = $user;
    }

    public function save()
    {
        $validatedData = $this->validate();
        if ($this->password) {
            $this->user->password = Hash::make($this->password);
        }
        $this->user->save();
        $this->reset('password');
        $this->reset('password_confirmation');
        $this->dispatchBrowserEvent('memberUpdated');
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.admin.admin-users.edit');
    }
}
