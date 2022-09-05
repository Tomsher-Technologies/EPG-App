<?php

namespace App\Http\Livewire\Member;

use App\Models\Common\Country;
use App\Models\Location\Package;
use App\Models\Member\Member;
use Livewire\Component;

class Create extends Component
{

    public $countries;
    public $packages;

    // Models
    public $name;
    public $email;
    public $phone;
    public $nationality;
    public $package;

    protected function rules()
    {
        return [
            'name' => 'required',
            'email' => ['required', 'email', 'unique:members,email'],
            'phone' => 'required',
            'nationality' => 'required',
            'package' => 'required',
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

    public function mount()
    {
        $this->packages = Package::whereStatus(true)->get();
        $this->countries = Country::all();
    }

    public function save()
    {
        $validatedData = $this->validate();
        Member::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'nationality' => $this->nationality,
            'package_id' => $this->package,
            'status' => 1,
            'total_earned' => 0,
            'total_redeemed' => 0,
            'last_used' => NULL,
            'first_used' => NULL,
        ]);
        $this->reset('name');
        $this->reset('email');
        $this->reset('phone');
        $this->reset('nationality');
        $this->reset('package');
        $this->dispatchBrowserEvent('memberUpdated');
    }

    public function render()
    {
        return view('livewire.member.create');
    }
}
