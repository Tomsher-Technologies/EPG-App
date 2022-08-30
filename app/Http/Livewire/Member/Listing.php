<?php

namespace App\Http\Livewire\Member;

use App\Models\Member\Member;
use Livewire\Component;
use Livewire\WithPagination;


class Listing extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.member.listing', [
            'members' => Member::where('name', 'LIKE', '%' . $this->search . '%')
                ->orWhere('email', 'LIKE', '%' . $this->search . '%')
                ->orWhere('phone', 'LIKE', '%' . $this->search . '%')
                ->paginate(10),
        ]);
    }


    public function paginationView()
    {
        return 'admin.parts.custom-pagination-links';
    }
}
