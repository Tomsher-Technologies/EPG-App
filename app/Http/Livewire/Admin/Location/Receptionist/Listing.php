<?php

namespace App\Http\Livewire\Admin\Location\Receptionist;

use App\Models\Location\Location;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Listing extends Component
{
    use WithPagination;

    public $search = '';
    public $locations;
    public $location = 0;
    public $currentStatus;

    public function mount()
    {
        $this->locations = Location::all();
    }

    public function toggleStatus($id)
    {
        $member = User::where('id', $id)->first();
        $member->update([
            'status' => !$member->status
        ]);
        $this->dispatchBrowserEvent('statusChange', ['status' => $member->status]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = User::whereIs('receptionist')->with('location')->latest();

        if ((int)$this->location !== 0) {
            $query->where('location_id', (int)$this->location);
        }

        if ($this->search !== '') {
            $query->where('name', 'LIKE', '%' . $this->search . '%')
                ->orWhere('email', 'LIKE', '%' . $this->search . '%');
        }

        $receptionist = $query->paginate(10);

        return view('livewire.admin.location.receptionist.listing', [
            'receptionists' => $receptionist,
        ]);
    }

    public function paginationView()
    {
        return 'admin.parts.custom-pagination-links';
    }

    public function deleteMember($id)
    {
        $status = User::where('id', $id)->first()->delete();
        if ($status) {
            $this->dispatchBrowserEvent('modelDeleted');
        } else {
            $this->dispatchBrowserEvent('modelDeletedFailed');
        }
    }

    public function changeLocation()
    {
        $this->render();
    }
}
