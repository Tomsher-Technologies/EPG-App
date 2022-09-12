<?php

namespace App\Http\Livewire\Admin\Package;

use App\Models\Location\Package;
use Livewire\Component;
use Livewire\WithPagination;

class Listing extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $query = Package::latest();

        if ($this->search !== '') {
            $query->where('name', 'LIKE', '%' . $this->search . '%');
        }

        $packages = $query->paginate(15);

        return view('livewire.admin.package.listing')
            ->with([
                'packages' => $packages
            ]);
    }

    public function toggleStatus($id)
    {
        $package = Package::where('id', $id)->first();
        $package->update([
            'status' => !$package->status
        ]);
        $this->dispatchBrowserEvent('statusChange', ['status' => $package->status]);
    }

    public function deletePackage($id)
    {
        $status = Package::where('id', $id)->first()->delete();
        if ($status) {
            $this->dispatchBrowserEvent('modelDeleted');
        } else {
            $this->dispatchBrowserEvent('modelDeletedFailed');
        }
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
