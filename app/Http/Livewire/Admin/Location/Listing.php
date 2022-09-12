<?php

namespace App\Http\Livewire\Admin\Location;

use App\Models\Location\Location;
use Livewire\Component;
use Livewire\WithPagination;

class Listing extends Component
{

    use WithPagination;

    public $search;

    public function paginationView()
    {
        return 'admin.parts.custom-pagination-links';
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function toggleStatus($id)
    {
        $location = Location::where('id', $id)->first();
        $location->update([
            'status' => !$location->status
        ]);
        $this->dispatchBrowserEvent('statusChange', ['status' => $location->status]);
    }

    public function deleteLocation($id)
    {
        $status = Location::where('id', $id)->first()->delete();
        if ($status) {
            $this->dispatchBrowserEvent('modelDeleted');
        } else {
            $this->dispatchBrowserEvent('modelDeletedFailed');
        }
    }

    public function render()
    {
        $query = Location::latest();

        if ($this->search !== '') {
            $query->where('name', 'LIKE', '%' . $this->search . '%');
        }

        $locations = $query->paginate(10);

        return view('livewire.admin.location.listing', [
            'locations' => $locations,
        ]);
    }
}
