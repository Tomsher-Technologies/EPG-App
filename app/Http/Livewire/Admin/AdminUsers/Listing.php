<?php

namespace App\Http\Livewire\Admin\AdminUsers;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Listing extends Component
{
    use WithPagination;

    public $search = '';
    public $currentStatus;

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

    public function render()
    {

        $query = User::whereIs('superadmin')->latest();

        if ($this->search !== '') {
            $query->where('name', 'LIKE', '%' . $this->search . '%')
                ->orWhere('email', 'LIKE', '%' . $this->search . '%');
        }

        $users = $query->paginate(15);

        return view('livewire.admin.admin-users.listing', [
            'users' => $users
        ]);
    }
}
