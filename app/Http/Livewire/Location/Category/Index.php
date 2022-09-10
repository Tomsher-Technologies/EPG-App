<?php

namespace App\Http\Livewire\Location\Category;

use App\Models\Location\LocationCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    public $search = '';

    public $name;

    protected function rules()
    {
        return [
            'name' => ['required', 'unique:location_categories,name']
        ];
    }

    protected $messages = [
        'name.required' => 'Please enter a name',
        'name.unique' => 'This name already exists',
    ];


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();
        LocationCategory::create([
            'name' => $this->name,
            'status' => 1,
        ]);

        $this->reset('name');
        $this->dispatchBrowserEvent('recordCreated');
    }

    public function toggleStatus($id)
    {
        $cat = LocationCategory::where('id', $id)->first();
        $cat->update([
            'status' => !$cat->status
        ]);
        $this->dispatchBrowserEvent('statusChange', ['status' => $cat->status]);
    }

    public function deleteMember($id)
    {
        $status = LocationCategory::where('id', $id)->first()->delete();
        if ($status) {
            $this->dispatchBrowserEvent('modelDeleted');
        } else {
            $this->dispatchBrowserEvent('modelDeletedFailed');
        }
    }

    public function render()
    {

        $query = LocationCategory::latest()->withCount('location');

        if ($this->search !== '') {
            $query->where('name', 'like', "%" . $this->search . "%");
        }

        $categories = $query->paginate(15);

        return view('livewire.location.category.index')
            ->with([
                'categories' => $categories
            ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function paginationView()
    {
        return 'admin.parts.custom-pagination-links';
    }
}
