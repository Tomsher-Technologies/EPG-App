<?php

namespace App\Http\Livewire\Admin\Benifit;

use App\Models\Benefits\Benefit;
use App\Models\Benefits\BenefitCategory;
use App\Models\Location\Location;
use Livewire\Component;

class Create extends Component
{

    public $location;
    public $category;


    public $name;
    public $benefit_category_id;
    public $location_id;
    public $discount_type;
    public $validity_type;
    public $status = 1;
    public $discount;
    public $validity;

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
            'name' => ['required', 'unique:benefits,name'],
            'benefit_category_id' => ['required'],
            'location_id' => ['required'],
            'discount_type' => ['required'],
            'validity_type' => ['required'],
            'status' => ['required'],
            'discount' => ['nullable'],
            'validity' => ['nullable'],
        ];
    }

    protected $messages = [
        'name.required' => 'Please enter a name.',
        'name.unique' => 'This name already exist.',
    ];

    public function mount()
    {
        $this->location = Location::get();
        $this->category = BenefitCategory::get();
    }

    public function save()
    {
        $validatedData = $this->validate();

        Benefit::create([
            'status' => $this->status,
            'name' => $this->name,
            'benefit_category_id' => $this->benefit_category_id,
            'location_id' => $this->location_id,
            'discount_type' => $this->discount_type,
            'validity_type' => $this->validity_type,
            'discount' => $this->discount !== "" ? $this->discount : 0,
            'validity' => $this->validity !== "" ? $this->validity : 0,
        ]);

        $this->reset('status');
        $this->reset('name');
        $this->reset('benefit_category_id');
        $this->reset('location_id');
        $this->reset('discount_type');
        $this->reset('validity_type');
        $this->reset('discount');
        $this->reset('validity');
        $this->dispatchBrowserEvent('memberUpdated');
    }

    public function render()
    {
        return view('livewire.admin.benifit.create');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
