<?php

namespace App\Http\Livewire\Member;

use App\Models\Location\Package;
use App\Models\Member\Member;
use Livewire\Component;
use Livewire\WithPagination;


class Listing extends Component
{
    use WithPagination;

    public $search = '';

    public $packages;

    public $package = 2;

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
        $member = Member::where('id', $id)->first();
        $member->update([
            'status' => !$member->status
        ]);
    }

    public function render()
    {
        return view('livewire.member.listing', [
            'members' => Member::where('package_id',  (int)$this->package)
                ->where('name', 'LIKE', '%' . $this->search . '%')
                ->orWhere('email', 'LIKE', '%' . $this->search . '%')
                ->orWhere('phone', 'LIKE', '%' . $this->search . '%')

                ->paginate(10),
        ]);
    }


    public function paginationView()
    {
        return 'admin.parts.custom-pagination-links';
    }

    public function deleteMember($id)
    {
        Member::destroy($id);
    }
}
