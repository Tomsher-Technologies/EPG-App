<?php

namespace App\Http\Livewire\Member;

use App\Models\Location\Package;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;


class Listing extends Component
{
    use WithPagination;

    public $search = '';

    public $packages;

    public $package = 0;

    public $currentStatus;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function changePackage()
    {
        $this->render();
    }

    public function mount()
    {
        $this->packages = Package::all();
    }

    public function toggleStatus($id)
    {
        $member = User::whereIs('member')->where('id', $id)->first();
        $member->update([
            'status' => !$member->status
        ]);
    }

    public function render()
    {

        $query = User::whereIs('member')->with('member_details')->latest();

        if ((int)$this->package !== 0) {
            $query->where('member_details.package_id', (int)$this->package);
        }

        if ($this->search !== '') {
            $query->where('name', 'LIKE', '%' . $this->search . '%')
                ->orWhere('email', 'LIKE', '%' . $this->search . '%')
                ->orWhere('member_details.phone', 'LIKE', '%' . $this->search . '%');
        }

        $members = $query->paginate(10);

        return view('livewire.member.listing', [
            'members' => $members,
        ]);
    }


    public function paginationView()
    {
        return 'admin.parts.custom-pagination-links';
    }

    public function deleteMember($id)
    {
        User::destroy($id);
    }
}
