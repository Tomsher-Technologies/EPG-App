<?php

namespace App\Http\Livewire\Admin\Package;

use App\Models\Benefits\Benefit;
use App\Models\Location\Package;
use Livewire\Component;
use Livewire\WithPagination;

class Assign extends Component
{

    use WithPagination;

    public $search = '';

    public Package $package;

    public $selectedItems = [];

    public function mount($package)
    {
        $this->package = $package;
        $setOfIds = $package->benefits->pluck('id')->toArray();

        $benefitsIds = Benefit::whereStatus(true)->pluck('id');

        foreach ($benefitsIds as $id) {
            if (in_array($id, $setOfIds)) {
                $this->selectedItems[$id] = true;
            } else {
                $this->selectedItems[$id] = false;
            }
        }
    }

    function save()
    {
        $this->package->benefits()->detach();
        $this->package->benefits()->attach(array_keys($this->selectedItems, true));
        $this->dispatchBrowserEvent('memberUpdated');
    }

    public function render()
    {
        $query = Benefit::whereStatus(true);

        if ($this->search !== '') {
            $query->where('name', 'LIKE', '%' . $this->search . '%');
        }

        $benefits = $query->get();

        return view('livewire.admin.package.assign')->with([
            'benefits' => $benefits
        ]);
    }

    public function assign()
    {
        $this->package->benefits()->attach($this->selectedItems);
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
