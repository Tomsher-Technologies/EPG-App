<?php

namespace App\Http\Livewire\Admin\Benifit;

use App\Models\Benefits\Benefit;
use App\Models\Benefits\BenefitCategory;
use App\Models\Location\Location;
use Livewire\Component;

class Edit extends Component
{

    public Benefit $benefit;
    public $location;
    public $category;

    public $discountList = array(
        '%' => "% off",
        'free' => "Free",
    );

    public $validityList = array(
        'day' => "Per day",
        'week' => "Per week",
        'month' => "Per month",
        'year' => "Per year",
        'year' => "Per year",
        'limited' => "Limited",
        'unlimited' => "Unlimited"
    );

    protected function rules()
    {
        return [
            'benefit.name' => ['required', 'unique:benefits,name,' . $this->benefit->id],
            'benefit.status' => ['required'],
            'benefit.benefit_category_id' => ['required'],
            'benefit.location_id' => ['required'],
            'benefit.discount_type' => ['required'],
            'benefit.validity_type' => ['required'],
            'benefit.status' => ['required'],
            'benefit.discount' => ['nullable'],
            'benefit.validity' => ['nullable'],
        ];
    }

    protected $messages = [
        'benefit.name.required' => 'Please enter a name.',
        'benefit.name.unique' => 'This name already exist.',
    ];

    public function mount($benefit)
    {
        $this->location = Location::get();
        $this->category = BenefitCategory::get();

        $this->benefit = $benefit;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();
        $this->benefit->update([
            'status' => $this->benefit->status,
            'name' => $this->benefit->name,
            'benefit_category_id' => $this->benefit->benefit_category_id,
            'location_id' => $this->benefit->location_id,
            'discount_type' => $this->benefit->discount_type,
            'validity_type' => $this->benefit->validity_type,
            'discount' => $this->benefit->discount !== "" ? $this->benefit->discount : 0,
            'validity' => $this->benefit->validity !== "" ? $this->benefit->validity : 0,
        ]);
        $this->dispatchBrowserEvent('memberUpdated');
    }

    public function render()
    {
        return view('livewire.admin.benifit.edit');
    }
}
