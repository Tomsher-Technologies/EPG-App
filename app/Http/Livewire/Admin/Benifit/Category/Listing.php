<?php

namespace App\Http\Livewire\Admin\Benifit\Category;

use App\Models\Benefits\BenefitCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Listing extends Component
{

    use WithPagination;

    public $search = '';


    public function toggleStatus($id)
    {
        $benifit = BenefitCategory::where('id', $id)->first();
        $benifit->update([
            'status' => !$benifit->status
        ]);
        $this->dispatchBrowserEvent('statusChange', ['status' => $benifit->status]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {

        $query = BenefitCategory::latest();

        if ($this->search !== '') {
            $query->where('name', 'LIKE', '%' . $this->search . '%');
        }

        $benifits = $query->paginate(15);

        return view('livewire.admin.benifit.category.listing')->with(['benifits' => $benifits]);
    }

    public function paginationView()
    {
        return 'admin.parts.custom-pagination-links';
    }
}
