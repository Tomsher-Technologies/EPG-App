<?php

namespace App\Http\Livewire\Admin\Benifit\Category;

use App\Models\Benefits\BenefitCategory;
use Livewire\Component;

class Edit extends Component
{

    public BenefitCategory $category;

    public function mount($category)
    {
        $this->category = $category;
    }

    protected function rules()
    {
        return [
            'category.name' => ['required', 'unique:benefit_categories,name,' . $this->category->id],
            'category.status' => ['required'],
        ];
    }

    protected $messages = [
        'category.name.required' => 'Please enter a name.',
        'category.name.unique' => 'This name already exist.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();
        $this->category->save();
        $this->dispatchBrowserEvent('memberUpdated');
    }

    public function render()
    {
        return view('livewire.admin.benifit.category.edit')->with([
            'category' => $this->category
        ]);
    }
}
