<?php

namespace App\Http\Livewire\Admin\Benifit;

use App\Models\Benefits\Benefit;
use Livewire\Component;
use Livewire\WithPagination;

class Listing extends Component
{

    use WithPagination;

    public $search;

    public function toggleStatus($id)
    {
        $benefit = Benefit::where('id', $id)->first();
        $benefit->update([
            'status' => !$benefit->status
        ]);
        $this->dispatchBrowserEvent('statusChange', ['status' => $benefit->status]);
    }

    public function deleteLocation($id)
    {
        $status = Benefit::where('id', $id)->first()->delete();
        if ($status) {
            $this->dispatchBrowserEvent('modelDeleted');
        } else {
            $this->dispatchBrowserEvent('modelDeletedFailed');
        }
    }

    public function render()
    {
        $query = Benefit::latest();

        if ($this->search !== '') {
            $query->where('name', 'LIKE', '%' . $this->search . '%');
        }

        $benefits = $query->paginate(10);

        return view('livewire.admin.benifit.listing', [
            'benefits' => $benefits,
        ]);
    }

    public function paginationView()
    {
        return 'admin.parts.custom-pagination-links';
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
