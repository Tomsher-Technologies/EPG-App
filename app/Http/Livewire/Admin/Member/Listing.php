<?php

namespace App\Http\Livewire\Admin\Member;

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
        $this->dispatchBrowserEvent('statusChange', ['status' => $member->status]);
    }

    public function render()
    {

        $query = User::whereIs('member')->with(['member_details', 'member_details.package'])->latest();

        if ((int)$this->package !== 0) {
            $pid = $this->package;
            $query->whereHas('member_details', function ($q) use ($pid) {
                return $q->where('package_id', $pid);
            });
        }

        if ($this->search !== '') {
            $search = $this->search;
            $query->where('id',  $this->search)
                ->orWhere('name', 'LIKE', '%' . $this->search . '%')
                ->orWhere('email', 'LIKE', '%' . $this->search . '%')
                ->orWhereHas('member_details', function ($q) use ($search) {
                    return $q->where('phone', 'LIKE', '%' . $search . '%');
                });
        }

        $members = $query->whereIs('member')->paginate(10);


        return view('livewire.admin.member.listing', [
            'members' => $members,
        ]);
    }


    public function paginationView()
    {
        return 'admin.parts.custom-pagination-links';
    }

    public function deleteMember($id)
    {
        $status = User::destroy($id);
        if ($status) {
            $this->dispatchBrowserEvent('modelDeleted');
        } else {
            $this->dispatchBrowserEvent('modelDeletedFailed');
        }
    }
}
