<?php

namespace App\Http\Livewire\Member;

use App\Models\Common\Country;
use App\Models\Location\Package;
use App\Models\Member\Member;
use Livewire\Component;

class Edit extends Component
{

    public Member $member;

    // protected $rules = [
    //     'member.name' => 'required|string|min:6',
    //     'member.email' => 'required|email|unique:members,email',
    //     'member.phone' => 'required',
    //     'member.nationality' => 'required',
    //     'member.package_id' => 'required',
    // ];

    protected function rules()
    {
        return [
            'member.name' => 'required',
            'member.email' => ['required', 'email', 'unique:members,email,' . $this->member->id],
            'member.phone' => 'required',
            'member.nationality' => 'required',
            'member.package_id' => 'required',
        ];
    }

    protected $messages = [
        'member.name.required' => 'Please enter a name',
        'member.email.required' => 'The email address cannot be empty.',
        'member.phone.required' => 'The phone number cannot be empty.',
        'member.email.email' => 'The email address format is not valid.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($member)
    {
        $this->member = $member;
        $this->member->load('package');
        $this->countries = Country::select('name')->get();
        $this->packages = Package::all();
    }

    public function save()
    {
        $validatedData = $this->validate();
        $this->member->save();
        $this->dispatchBrowserEvent('memberUpdated');
    }

    public function render()
    {
        return view('livewire.member.edit');
    }
}
