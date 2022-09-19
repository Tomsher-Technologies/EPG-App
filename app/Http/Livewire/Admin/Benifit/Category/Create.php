<?php

namespace App\Http\Livewire\Admin\Benifit\Category;

use App\Models\Benefits\BenefitCategory;
use Livewire\Component;

class Create extends Component
{

    public $name;

    protected function rules()
    {
        return [
            'name' => ['required', 'unique:benefit_categories,name']
        ];
    }

    protected $messages = [
        'name.required' => 'Please enter a name',
        'name.unique' => 'The name already exists.'
    ];

    public function save()
    {
        $validatedData = $this->validate();
        
        BenefitCategory::create([
            'name' => $this->name,
        ]);

        $this->reset('name');
        $this->dispatchBrowserEvent('memberUpdated');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.admin.benifit.category.create');
    }
}
